<?php
class Expo extends CI_Controller
{
    // Admin Side

    // Home Side
    public function Home()
    {
        $data['title'] = "Home";
        $this->load->view("guest/expo/master/header", $data);
        $this->load->view("guest/expo/page/index", $data);
        $this->load->view("guest/expo/master/footer-2", $data);
    }

    public function Kategori()
    {
        $data['title'] = "Kategori";
        $this->load->view("guest/expo/master/header", $data);
        $this->load->view("guest/expo/page/kategori", $data);
        $this->load->view("guest/expo/master/footer-2", $data);
    }

    public function Rank()
    {
        $data['title'] = "Peringkat";
        $this->load->view("guest/expo/master/header", $data);
        $this->load->view("guest/expo/page/rank", $data);
        $this->load->view("guest/expo/master/footer-2", $data);
    }
}
