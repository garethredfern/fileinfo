<?php
class Modifier_fileinfo extends Modifier {

  public function index($file, $parameters=array()) {


    switch ($parameters) {

      case "file_ext":
      return File::getExtension();
      break;

      case "file_size":
      return File::getSize(BASE_PATH . $file);
      break;

      case "file_size_kilobytes":
      return number_format($fileSize / 1024);
      break;

      case "file_size_human":
      return self::format_bytes_human($fileSize);
      break;

      default:
      return File::getExtension();
    }

  }

  private function format_bytes_human($bytes) {
    if ($bytes < 1024) return $bytes.' B';
    elseif ($bytes < 1048576) return round($bytes / 1024, 2).' KB';
    elseif ($bytes < 1073741824) return round($bytes / 1048576, 2).' MB';
    elseif ($bytes < 1099511627776) return round($bytes / 1073741824, 2).' GB';
    else return round($bytes / 1099511627776, 2).' TB';
  }

}
