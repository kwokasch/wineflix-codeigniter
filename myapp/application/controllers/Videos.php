<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Videos extends CI_Controller
    {
        public function get_user()
        {
            return "S";
        }

        public function get_hero_content()
        {
            return array(
                "title"       => "Rex Goliath",
                "subtitle"    => "His Royal Majesty is back.",
                "image_url"   => "https://sika-wineflix.web.app/rex-goliath-logo.png",
                "description" => "America's most unhinged rooster is out of retirement, and this time? He's mad as hell. Experience the unapologetic flavor burst of Rex Goliath.",
            );
        }

        public function get_videos()
        {
            return array(
                array(
                    "id"          => 1,
                    "image_url"   => "https://sika-wineflix.web.app/red-wine.jpg",
                    "is_new"      => true,
                    "label"       => "Wine",
                    "is_finished" => true,
                ),
                array(
                    "id"          => 2,
                    "image_url"   => "https://sika-wineflix.web.app/red-wine.jpg",
                    "label"       => "Wine",
                    "is_finished" => true,
                ),
                array(
                    "id"          => 3,
                    "image_url"   => "https://sika-wineflix.web.app/red-wine.jpg",
                    "label"       => "Wine",
                    "is_new"      => true,
                    "is_finished" => true,
                ),
                array(
                    "id"          => 4,
                    "image_url"   => "https://sika-wineflix.web.app/red-wine.jpg",
                    "label"       => "Wine",
                    "is_finished" => true,
                ),
                array(
                    "id"          => 5,
                    "image_url"   => "https://sika-wineflix.web.app/red-wine.jpg",
                    "label"       => "Wine",
                    "is_new"      => true,
                    "is_finished" => true,
                ),
                array(
                    "id"          => 6,
                    "image_url"   => "https://sika-wineflix.web.app/red-wine.jpg",
                    "label"       => "Wine",
                    "is_finished" => true,
                ),
                array(
                    "id"          => 7,
                    "image_url"   => "https://sika-wineflix.web.app/red-wine.jpg",
                    "label"       => "Wine",
                    "is_finished" => true,
                ),
                array(
                    "id"          => 8,
                    "image_url"   => "https://sika-wineflix.web.app/red-wine.jpg",
                    "label"       => "Wine",
                    "is_finished" => true,
                ),
                array(
                    "id"        => 1,
                    "image_url" => "https://sika-wineflix.web.app/red-wine.jpg",
                    "progress"  => 22,
                    "label"     => "Wine",
                ),
                array(
                    "id"        => 2,
                    "image_url" => "https://sika-wineflix.web.app/red-wine.jpg",
                    "progress"  => 22,
                    "label"     => "Wine",
                ),
                array(
                    "id"        => 3,
                    "image_url" => "https://sika-wineflix.web.app/red-wine.jpg",
                    "progress"  => 22,
                    "label"     => "Wine",
                ),
                array(
                    "id"        => 4,
                    "image_url" => "https://sika-wineflix.web.app/red-wine.jpg",
                    "progress"  => 22,
                    "label"     => "Wine",
                ),
                array(
                    "id"        => 5,
                    "image_url" => "https://sika-wineflix.web.app/red-wine.jpg",
                    "progress"  => 22,
                    "label"     => "Wine",
                ),
                array(
                    "id"        => 6,
                    "image_url" => "https://sika-wineflix.web.app/red-wine.jpg",
                    "progress"  => 22,
                    "label"     => "Wine",
                ),
                array(
                    "id"        => 7,
                    "image_url" => "https://sika-wineflix.web.app/red-wine.jpg",
                    "progress"  => 22,
                    "label"     => "Wine",
                ),
                array(
                    "id"        => 8,
                    "image_url" => "https://sika-wineflix.web.app/red-wine.jpg",
                    "progress"  => 22,
                    "label"     => "Wine",
                ),
            );
        }

        public function index()
        {
            $data['hero_content'] = $this->get_hero_content();
            $data['videos']       = $this->get_videos();
            $data['user']         = $this->get_user();

            $this->load->helper('url');
            $this->load->view('html_head');
            $this->load->view('components/hero');
            $this->load->view('components/navigation');
            $this->load->view('components/primary_navigation');
            $this->load->view('components/secondary_navigation');
            $this->load->view('components/user_avatar');
            $this->load->view('components/hero_content');
            $this->load->view('components/hero_image');
            $this->load->view('components/controls');
            $this->load->view('components/primary_action');
            $this->load->view('components/secondary_action');
            $this->load->view('components/category');
            $this->load->view('components/wine');
            $this->load->view('app', $data);
            $this->load->view('html_foot');
        }
    }
