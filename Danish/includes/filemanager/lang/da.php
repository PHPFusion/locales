<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: locales/Danish/includes/filemanager/lang/da.php
| Author: Helmuth Mikkelsen (helmuth)
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/
return array(

    'Select' => 'Vælg',
    'Deselect_All' => 'Fravælg alle',
    'Select_All' => 'Vælg alle',
    'Erase' => 'Slet',
    'Open' => 'Åbn',
    'Confirm_del' => 'Er du sikker på, at du vil slette denne fil?',
    'All' => 'Alle',
    'Files' => 'Filer',
    'Images' => 'Billeder',
    'Archives' => 'Mapper',
    'Error_Upload' => 'Den uploadede fil er større end tilladt (100MB).',
    'Error_extension' => 'Fil typen er ikke tilladt.',
    'Upload_file' => 'Upload',
    'Filters' => 'Filter',
    'Videos' => 'Videoer',
    'Music' => 'Musik',
    'New_Folder' => 'Ny mappe',
    'Folder_Created' => 'Mappen er oprettet korrekt',
    'Existing_Folder' => 'Mappen findes allerede',
    'Confirm_Folder_del' => 'Er du sikker på, at du vil slette mappen og alt dens indhold?',
    'Return_Files_List' => 'Tilbage til filoversigten',
    'Preview' => 'Gennemse',
    'Download' => 'Download',
    'Insert_Folder_Name' => 'Indsæt mappenavn:',
    'Root' => 'rod',
    'Rename' => 'Omdøb',
    'Back' => 'tilbage',
    'View' => 'Se',
    'View_list' => 'Vis liste',
    'View_columns_list' => 'Søjleliste',
    'View_boxes' => 'Boksliste',
    'Toolbar' => 'Værktøjslinje',
    'Actions' => 'Handlinger',
    'Rename_existing_file' => 'Filen findes allerede',
    'Rename_existing_folder' => 'Mappen findes allerede',
    'Empty_name' => 'Indsæt et navn',
    'Text_filter' => 'tekstfilter',
    'Swipe_help' => 'Swipe over navnet på fil/mappe for at se muligheder',
    'Upload_base' => 'Basis upload',
    'Upload_base_help' => "Drag & Drop filer (moderne browsere) eller klik på upper-knappen for at tilføje fil(er) og klik på Start upload. Når uploaden er færdig, klik så 'Tilbage til fillisten'-knappen.",
    'Upload_add_files' => 'Tilføj fil(er)',
    'Upload_start' => 'Start upload',
    'Upload_error_messages' =>array(
        1 => 'Den uploadede fil overstiger upload_max_filesize indstillingen i php.ini',
        2 => 'Dern uploadede fil overstiger MAX_FILE_SIZE indstillingen der er indtastet i HTML-formularen',
        3 => 'Den uploadede fil blev kun delvist uploadet',
        4 => 'Ingen fil blev uploadet',
        6 => 'Mangler en midlertidig folder',
        7 => 'Kunne ikke skrive fil til disk',
        8 => 'En PHP extension stoppede filupload',
        'post_max_size' => 'Den uploadede fil overstiger post_max_size indstillingen i php.ini',
        'max_file_size' => 'Filen er for stor',
        'min_file_size' => 'Filen er for lille',
        'accept_file_types' => 'Filetypen ikke tilladt',
        'max_number_of_files' => 'Maksimum antal filer oversteget',
        'max_width' => 'Billede overstiger maksimum bredde',
        'min_width' => 'Billede kræver en minimum bredde',
        'max_height' => 'Billede overstiger maksimum højde',
        'min_height' => 'Billede kræver en minimum højde',
        'abort' => 'Filupload afbrudt',
        'image_resize' => 'Kunne ikke skalere billede'
    ),
    'Upload_url' => 'Fra url',
    'Type_dir' => 'dir',
    'Type' => 'Type',
    'Dimension' => 'Dimensioner',
    'Size' => 'Størrelse',
    'Date' => 'Dato',
    'Filename' => 'Filnavn',
    'Operations' => 'Operationer',
    'Date_type' => 'år-måned-dag',
    'OK' => 'OK',
    'Cancel' => 'Afbryd',
    'Sorting' => 'sortering',
    'Show_url' => 'Vis sti',
    'Extract' => 'Fold ud her',
    'File_info' => 'filinfo',
    'Edit_image' => 'Rediger billede',
    'Duplicate' => 'Kopier',
    'Folders' => 'Mapper',
    'Copy' => 'Kopier',
    'Cut' => 'Klip',
    'Paste' => 'Indsæt',
    'CB' => 'UKH', // clipboard
    'Paste_Here' => 'Indsæt i denne mappe',
    'Paste_Confirm' => 'Er du sikker på, at du vil indsætte i denne mappe? Det vil overkrive allerede eksisterende filer/mapper, hvis der findes nogen.',
    'Paste_Failed' => 'Det lykkedes ikke at indsætte fil(en/erne)',
    'Clear_Clipboard' => 'Slet indholdet af udklipsholderen',
    'Clear_Clipboard_Confirm' => 'Er du sikker på, at du vil slette indholdet af udklipsholderen?',
    'Files_ON_Clipboard' => 'Der findes filer i udklipsholderen.',
    'Copy_Cut_Size_Limit' => 'De valgte filer/mapper er for store til at %s. Maks.: %d MB/operation', // %s = cut or copy
    'Copy_Cut_Count_Limit' => 'Du har valgt for mange filer/mapper til at %s. Maks.: %d filer/operation', // %s = cut or copy
    'Copy_Cut_Not_Allowed' => 'Du har ikke tilladelse til at %s filer. Tal med din administrator.', // %s(1) = cut or copy, %s(2) = files or folders
    'Aviary_No_Save' => 'Det var ikke muligt at gemme billedet',
    'Zip_No_Extract' => 'Det var ikke muligt at hente filen. Filen er muligvis ødelagt.',
    'Zip_Invalid' => 'Denne filtype understøttes ikke. De mulige filtyper er: zip, gz, tar.',
    'Dir_No_Write' => 'Der kan ikke skrives til den valgte mappe. Kontakt din administrator.',
    'Function_Disabled' => 'Denne %s funktion er slået fra på serveren.', // %s = cut or copy
    'File_Permission' => 'Filtilladelser',
    'File_Permission_Not_Allowed' => 'Det er ikke tilladt at ændre tilladelsen for %s.', // %s = files or folders
    'File_Permission_Recursive' => 'Gøres ved alle mapper og filer (rekursivt)?',
    'File_Permission_Wrong_Mode' => "Den anvendte indstilling for tilladelse er ikke korrekt.",
    'User' => 'Bruger',
    'Group' => 'Gruppe',
    'Yes' => 'Ja',
    'No' => 'Nej',
    'Lang_Not_Found' => 'Det var ikke muligt at finde sprogfilen.',
    'Lang_Change' => 'Andet sprog',
    'File_Not_Found' => 'Det var ikke muligt at finde filen.',
    'File_Open_Edit_Not_Allowed' => 'Du har ikke tiladelse til at %s denne fil.', // %s = open or edit
    'Edit' => 'Rediger',
    'Edit_File' => "Rediger filens indhold",
    'File_Save_OK' => "Filen blev gemt.",
    'File_Save_Error' => "Der opstod en fejl i forsøget på at gemme filen.",
    'New_File' => 'Opret ny fil',
    'No_Extension' => 'Husk at tilføje filtype.',
    'Valid_Extensions' => 'Gyldige filtyper er: %s', // %s = txt,log etc.
    'Upload_message' => "Drop filen her for at uploade",

    'SERVER ERROR' => "SERVER FEJL",
    'forbidden' => "Forbudt",
    'wrong path' => "Forkert sti",
    'wrong name' => "Forkert navn",
    'wrong extension' => "Forkert extension",
    'wrong option' => "Forkert valg",
    'wrong data' => "Forkert data",
    'wrong action' => "Forkert handling",
    'wrong sub-action' => "Forkert sub-handling",
    'no action passed' => "Ingen handling blev gennemført",
    'no path' => "Ingen sti",
    'no file' => "Ingen fil",
    'view type number missing' => "Se typenummer mangler",
    'Not enough Memory' => "Ikke nok hukommelse",
    'max_size_reached' => "Din billedfolder har nået dens maksimale størrelse på %d MB.", //%d = max overall size
    'B' => "B",
    'KB' => "KB",
    'MB' => "MB",
    'GB' => "GB",
    'TB' => "TB",
    'total size' => "Størrelse i alt",
);
