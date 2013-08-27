Get File Info
=============

A simple Statamic plugin to output file information.

## Installing

Drop the `fileinfo` folder into the Statamic `/_add-ons/` folder.

## Example

~~~
<ul>
{{ fileinfo file="/assets/docs/mydocument.pdf" }}
  <li>Your file extension is: {{ file_ext }}
  <li>Tour file size is: {{ file_size }}
  <li>The type of file is: {{ file_type }}
{{ /fileinfo }}
</ul>
~~~

## Parameters

- file
