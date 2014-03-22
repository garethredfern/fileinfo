Get File Info
=============

A simple Statamic plugin to output file information.

## Installing

Drop the `fileinfo` folder into the Statamic `/_add-ons/` folder. If you have downloaded from github just remove the -master from the end of the folder name. You can delete the contents except for the pi.fileinfo.php file itself.

## Example

~~~
<ul>
{{ fileinfo file="/assets/docs/mydocument.pdf" }}
  <li>Your file extension is: {{ file_ext }}
  <li>Your file size is: {{ file_size }}
{{ /fileinfo }}
</ul>
~~~

## Parameters

- file

## Variables

- `{{ file_ext }}` grabs the file extension
- `{{ file_size }}` grabs the file size
- `{{ file_size_kilobytes }}` grabs the file size and converts it to kilobytes
