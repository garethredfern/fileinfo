<?php
class Plugin_fileinfo extends Plugin {

  var $meta = array(
      'name'       => 'File Info',
      'version'    => '1',
      'author'     => 'Gareth Redfern',
      'author_url' => 'http://garethredfern.com'
  );

  public function index() {
    $file     = $this->fetchParam("file", null, null, null, false);
    $fileSize = File::getSize(BASE_PATH . $file);

    $file_info =  array(
      "file_ext"  => File::getExtension(BASE_PATH . $file),
      "file_size" => $fileSize,
      "file_size_kilobytes" => number_format($fileSize / 1024)
    );
    return $file_info;
  }

}
