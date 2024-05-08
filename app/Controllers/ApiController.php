<?php

namespace App\Controllers;

class ApiController extends BaseController
{
    public function vid_data()
    {
        $data = [
            'https://www.youtube.com/watch?v=mAnqTu1aw7M'
        ];
        return $this->response->setJSON($data);
    }

    public function ppt_data()
    {
        $data = [
           'html.ppt'
        ];
        return $this->response->setJSON($data);
    }

    public function note_data()
    {
        $data = [
            'html.txt'
        ];
        return $this->response->setJSON($data);
    }

    public function quiz_data()
    {
        $data = [
            'html.json'
        ];
        return $this->response->setJSON($data);
    }

    public function editor()
    {
        $data = [
            'TryItEditor.html'
        ];
        return $this->response->setJSON($data);
    }
}