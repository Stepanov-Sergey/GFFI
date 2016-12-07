<?php
namespace Grav\Plugin;
class GalleryTwigExtension extends \Twig_Extension
{
    public function getName()
    {
        return 'GalleryTwigExtension';
    }
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('Gallery', [$this, 'GalleryFunction'])
        ];
    }
    public function GalleryFunction()
    {
          $dir='gallery';
            // $dir = getcwd();
            $f = scandir($dir);
           // $str=implode('<br>',$f);
                foreach ($f as $file)
                    {
                        if(preg_match('/t\.(png)/', $file))
                            {
                                $str.="<div class=\"pure-u-r\"><img src=\"gallery/$file\"></div>";
                            }
                    }
        return  "<center><div class=\"pure-g-r\">".$str."</div></center>";
    }
}
?>