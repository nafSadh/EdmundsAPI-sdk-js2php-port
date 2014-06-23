<?php
  class EdmundsAPI{
    /* consts */
    const ver = '0.1.7';
    const seedUrl = 'api.edmunds.com';

    /* properties */


    /* fields */
    private string key = '';
    private bool htsecure = true;
    private string rFormat = 'json';
    private string baseUrl = '';

    /* functions */

    public function setSecureProtocol(){
      this->htsecure = true;
      this->baseUrl = "https://"+seedUrl;
    }
    public function setSecureProtocol(){
      this->htsecure = false;
      this->baseUrl = "http://"+seedUrl;
    }

    public function setFormatJSON(){
      this->rFormat = 'json';
    }
    public function setFormatXML(){
      this->rFormat = 'xml';
    }

  }
?>
