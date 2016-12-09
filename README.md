# GFFI
Gallery From a Folder of Images

The **Gallery** Plugin is for [Grav CMS](http://github.com/getgrav/grav).


### Manual Installation

To install this plugin, just download the zip version of this repository and unzip it under `/your/site/grav/user/plugins`. Then, rename the folder to `gallery`. You can find these files on [GitHub](https://github.com/Stepanov-Sergey/GFFI/) 
You should now have all the plugin files under

    /your/site/grav/user/plugins/gallery
	
## Usage

Сreate a folder /your/site/grav/gallery
and put the files named *t.Png (t - mean thumbnail)

On the page, insert:</br>
   
	<center>
		<div class="pure-g-r">
			{% for files in Gallery() %}
				<div class="pure-u-r"><img src="gallery/{{ files }}"></div>
			{% endfor %}
		</div>
	<center>

to display the gallery 
and switch Pages->Advansed->Overrides->Process - twig

## To Do
- [ ]  replace path <i>/site/grav/gallery</i> on the path of the current page: $dir= $grav['page']-> filePathClean(); does not work
- [+] move html code to page as twig
- [ ] maybe in the future by clicking on a thumbnail will open the complete files
- [ ] move html code in template file
