<?php
  class EdmundsAPI{
    /* consts */
    const ver = '0.1.7';
    const baseName = 'api.edmunds.com';
    const mediaName = 'media.ed.edmunds-media.com';

    /* properties */


    /* fields */
    private string key = '';
    private bool htsecure = true;
    private string rFormat = 'json';
    private string baseUrl = '';
    private string mediaUrl = '';

    /* functions */

    public function setSecureProtocol(){
      this->htsecure = true;
      this->baseUrl = "https://"+baseName;
      this->mediaUrl = "https://"+mediaName;
    }
    public function setSecureProtocol(){
      this->htsecure = false;
      this->baseUrl = "https://"+baseName;
      this->baseUrl = "https://"+mediaName;
    }

    public function setFormatJSON(){
      this->rFormat = 'json';
    }
    public function setFormatXML(){
      this->rFormat = 'xml';
    }

  }
?>
