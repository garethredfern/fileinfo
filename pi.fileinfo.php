<?php
class Plugin_fileinfo extends Plugin {

  var $meta = array(
      'name'       => 'File Info',
      'version'    => '1.1',
      'author'     => 'Gareth Redfern',
      'author_url' => 'http://garethredfern.com'
  );

  public function index() {
    $file     = $this->fetchParam("file", null, null, null, false);
    $fileSize = File::getSize(BASE_PATH . $file);

    $file_info = array(
      "file_name" => basename($file), // Added by Rudy, March 31, 2015
      "file_ext"  => File::getExtension(BASE_PATH . $file),
      "file_size" => $fileSize,
      "file_size_kilobytes" => number_format($fileSize / 1024),
      "file_size_human" => self::format_bytes_human($fileSize)
    );
    return $file_info;
  }

  private function format_bytes_human($bytes) {
    if ($bytes < 1024) return $bytes.' B';
    elseif ($bytes < 1048576) return round($bytes / 1024, 2).' KB';
    elseif ($bytes < 1073741824) return round($bytes / 1048576, 2).' MB';
    elseif ($bytes < 1099511627776) return round($bytes / 1073741824, 2).' GB';
    else return round($bytes / 1099511627776, 2).' TB';
  }

}
