<?php

namespace App\File;

class Upload 
{
    /**
     *  
     *  Filename (no extension)
     * @var string
     */
    protected $name;

    /**
     * 
     * Extension (no punctuation)
     * @var string
     */
    protected $extension;
    /**
     * 
     * File type
     * @var string
     */
    protected $type;

    /**
     * Temporary name/file path
     * @var string
     */
    protected $tmpName;

    /**
     * 
     * Upload error code 
     * @var integer
     */
    protected $error;

    
    /**
     * 
     * Construct class
     * @param array $file $FILES[field]
     */
    public function __construct($file)
    {
        $this->type = $file['type'];
        $this->tmpName = $file['tmp_name'];
        $this->error = $file['error'];

        $info = pathinfo($file['name']);
        $this->name = $info['filename'];
        $this->extension = $info['extension'];
    }
    /**
     * 
     * @return array
     */
    public function run()
    {
        // Error checking
        if($this->error != 0) return false;

        return $this->selectedExt($this->extension);
    }

     /**
     * 
     * @return string
     */
    public function csv_to_array()
    {
        //code...
        return 'csv to array';
    }

     /**
     * 
     * @return string
     */
    public function txt_to_array()
    {
        //code...
        return 'txt to array';
    }

     /**
     * 
     * @return string
     */
    public function tls_to_array()
    {
        //code...
        return 'tls to array';
    }

     /**
     * 
     * @return string
     */
    public function xml_to_array()
    {
        //code...
        return 'xml to array';
    }

     /**
     * 
     * @return string
     */
    public function xls_to_array()
    {
        //code...
        return 'xls to array';
    }

     /**
     * Select the extension
     * @return
     */
    public function selectedExt($ext)
    {
        switch ($ext) {
            case 'csv':
                return $this->csv_to_array();
                break;
            case 'txt':
                return $this->txt_to_array();
                break;
            case 'tls':
                return $this->tls_to_array();
                break;
            case 'xml':
                return $this->xml_to_array();
                break;
            case 'xls':
                return $this->xls_to_array();
                break;
            default:
                return "file type not supported";
                break;
        }
    }

}

