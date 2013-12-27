<?php
/**
 * Created by PhpStorm.
 * User: brenhein
 * Date: 12/27/13
 * Time: 11:27 AM
 */

class SteamauthController extends AppController {
    public $components = array('Openid' => array('accept_google_apps' => false));
    public $uses = array('Steamplayer');

    public function login() {
        $realm = 'http://' . $_SERVER['HTTP_HOST'];
        $returnTo = $realm . '/steamauth/login';

        if (!$this->request->isPost() && !$this->Openid->isOpenIDResponse()) {
            try {
                $this->Openid->authenticate("http://steamcommunity.com/openid", $returnTo, $realm);
            } catch (InvalidArgumentException $e) {
                $this->set('error', 'Invalid OpenID');
            } catch (Exception $e) {
                $this->set('error', $e->getMessage());
            }
        } elseif ($this->Openid->isOpenIDResponse()) {
            $response = $this->Openid->getResponse($returnTo);

            if ($response->status == Auth_OpenID_CANCEL) {
                return $this->redirect('/');
            } elseif ($response->status == Auth_OpenID_FAILURE) {
                $this->set('error', $response->message);
            } elseif ($response->status == Auth_OpenID_SUCCESS) {
                $this->Steamplayer->useDbConfig = 'steam';

                $openid_identity = $this->params['url']['openid_identity'];

                $steamid = str_replace("http://steamcommunity.com/openid/id/", "", $openid_identity);


                $udata = $this->Steamplayer->find('all',array('conditions'=>array('steamids'=>array($steamid))));
                $data = $udata["steamplayers"][0];

                $this->Session->write('User.steamid', $steamid);
                $this->Session->write('User.name', $data['personaname']);
                $this->Session->write('User.avatar', $data['avatar']);
                $this->Session->write('User.rank', 3);

                return $this->redirect('/');
            }
        }
    }
}