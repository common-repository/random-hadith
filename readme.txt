Random Hadith Wordpress 1.5 Plugin (Not tested on 1.2 - tester required)
 
Steps to install:

1. Download the plug-in (ZIP) and extract.

2. Open your Sidebar.php or any template file and add the <?php random_hadith() ?> to where you want the Hadith to show.

3. To decorate the script just add the <ul> and <li> tags (or any other appropriate tags you want).

4. An example of the code you can insert into the sidebar:

    <li><h2><?php _e(’Random Hadith’); ?></h2>
    <ul>
            <?php random_hadith() ?>
    </ul></il>

After this upload the plug-in to your wp-content/plugins directory and activate it in the admin panel. Your Random Hadith should then show up depending on where you have initiated the script.

The advantage of using this plug-in is that you can put the <?php random_hadith() ?> anywhere on the website! You can even have it after every post.

Special thanks to Kemas Yunus Antonius for the Random Hadith Script, and Jamie Talbot for helping with the Plugin Programming!

That’s all so far!

Usayd Younis

| © Usayd Networks | www.usayd.com | plugins@usayd.com |