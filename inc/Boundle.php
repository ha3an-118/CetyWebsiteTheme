<!-- https://github.com/Abbas-b-b/WordPressThemeResourceBoundle -->

<?php
class Boundle
{
    /*
    Each boundle has a name and one or more related file
    Each must have a supported File Type
    File path should be relative to the main directory of the theme

    Boundle format:
        array(
            'BoundleName' => array(
                'File1' => 'File Type',
                'File2' => 'File Type',
            ),
            etc
        );

    Supported File Types:
        -Style
        -Script
    */

    private $Boundles =
    array(
        'WebsiteStyle' => array(
            '/Assets/CSS/Color.css' => 'Style',
            '/Assets/CSS/FontAwesome-Custom.css' => 'Style',
            '/Assets/CSS/Style.css' => 'Style',
        ),
        'WebsiteScript' => array(
            '/Assets/JS/Actions.js' => 'Script',
        ),
        'Bootstrap' => array(
            'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' => 'Style',
            'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js' => 'Script',
            'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' => 'Script',
        ),
        'Jquery' => array(
            'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js' => 'Script',
        ),
    );

    //Functions
    public function Include(string $BoundleName)
    {
        foreach ($this->Boundles as $Name => $Files)
            if ($Name == $BoundleName)
                foreach ($Files as $File => $Type)
                    if ($Type == 'Style')
                        wp_enqueue_style(pathinfo($File, PATHINFO_FILENAME), $this->GetFileLocation($File));
                    else if ($Type == 'Script')
                        wp_enqueue_script(pathinfo($File, PATHINFO_FILENAME), $this->GetFileLocation($File));
    }

    private function GetFileLocation(string $File)
    {
        if (filter_var($File, FILTER_VALIDATE_URL))
            return $File;
        else
            return get_template_directory_uri() . $File;
    }
}