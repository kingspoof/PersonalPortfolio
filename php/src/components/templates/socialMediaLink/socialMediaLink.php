
<?php
    $css = '/components/templates/socialMediaLink/socialMediaLink.css';
    $link = '';
    $icon = '';
    $name = '';
    $icon_default = 'components/templates/socialMediaLink/icons/';
    switch(strtoupper($media)){
        case 'GITHUB':
            $link = 'https://github.com/kingspoof';
            $icon = $icon_default . 'github.png';
            $name = 'GitHub';
            break;
        case 'INSTAGRAM':
            $link = 'https://www.instagram.com/_luciien_';
            $icon = $icon_default . 'instagram.png';
            $name = 'Instagram';
            break;
        case 'LINKEDIN':
            $link = 'https://www.linkedin.com/in/lucienkaeser/';
            $icon = $icon_default . 'linkedin.png';
            $name = 'LinkedIn';
            break;
    }

    include('socialMediaLink.phtml');
?>