<b>Organize Themes and Backgrounds using tags</b>
To facilitate the organization and filtering of items, the option of tags was added.
It is possible to create, for example, tags with the names: <b>particle</b>, <b>water</b>, <b>blue</b>, <b>fire</b>, etc... and this way, when selecting a theme or background, you can easily list only the items in the respective tag to find the desired item.
It is also useful in the new features of the program, such as scripts and automation.


<b>Dynamically set background</b>
You can create rules to dynamically set background for music slides.
For example, creating a rule where every slide that has the word <b>'rain'</b> is defined with a random theme/video that has the tag <b>rain</b>.
Every slide that has the word <b>'ocean'</b>, <b>'oceans'</b> or <b>'sea'</b> is defined with a random theme/video that has the tag <b>sea</b>.


<b>Set unique MIDI shortcuts</b>
Controlling music slides via MIDI is a feature that has been used more and more.
However, to start the presentation of the lyrics, it was necessary that it was in the playlist to know the position of the item in the list and start the presentation via MIDI.
With the MIDI shortcuts option, you can set a specific MIDI code and velocity for a song lyric.
And that way you don't have to worry about adding it to the program's playlist, or what position in the list it is in.
Just send the MIDI command (code/velocity) defined for the lyrics of the song and the program will start the presentation.
This makes it easier, as you only need to set the song shortcut once in your track program, instead of constantly changing it according to the item's position in the playlist.


<b>[Slide Description] Paragraphs in sequence with no need to repeat</b>
In the lyric edit window, when defining a slide with a description, the following slides will also have the same description.
For example:
<code>##(Verse 1)
    Slide A
    Slide A

    Slide B
    Slide B

    ##(Chorus)
    Slide C
    Slide C

    Slide D
    Slide D</code>

In the example above, <b>Slide B</b> will be considered as <b>Verse 1</b>, and <b>Slide D</b> as <b>Chorus</b>


<b>Sort slides by slide description</b>
In the sorting slides window it will be possible to sort using only the descriptions.
For example: Verse 1, Chorus, Verse 2, Chorus, Chorus