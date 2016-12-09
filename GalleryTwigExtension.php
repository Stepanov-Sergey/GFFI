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
          $dir='gallery';//$dir=$this->grav['page']->filePathClean();
            $f = scandir($dir);
                foreach ($f as $file)
                    {
                        if(preg_match('/t\.(jpg)/', $file))
                            {
                                $str[]=$file;
                            }
                    }
        return  $str;
    }
}
?>
