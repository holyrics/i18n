<b>Holyrics Plan Synchronization</b>
The program's native "share" option (Holyrics Plan, not Google Drive) is now synchronized in real time.
Unlike before, it was necessary to access the window and upload/download items manually.
It continues to share only basic data: song lyrics, playlist, services, events, etc.
This change to automatic synchronization will allow the implementation of the "Holyrics Plan" app that will be available in the future.
Allowing access to Holyrics Plan account data in real time via cell phone.
And it will also allow editing via the app (create or edit song lyrics, scale, etc.) and, consequently, the app edits will also be automatically synchronized in the computer program

<b>"Telegram Files" functionality</b>
With a Holyrics Plan subscription, the user has an option to create a custom Telegram bot for use in the Holyrics ecosystem.
The <b>Telegram Files</b> functionality allows users to send files to your personalized bot, and you can access these files directly through the program window, making it convenient to organize and receive files from other people that will be displayed in the Holyrics program.
Limit of 20MB for sending the file directly in the chat.
But you can send a Google Drive link in chat for larger files.

<b>Rename file</b>
Option to rename or move files (by right-clicking) in the program library by updating the references to the file used in the program.
For example, if the file is added to the favorites bar, when you rename or move it, the reference in the favorites bar will also be updated.
This avoids problems and errors when adding a file to some program functionality (favorites bar, for example) and, when renaming the file by the operating system, the previously added item continues to point to the previous name, giving a file not found error.
Updated references: playlist (services and events), favorites bar, triggers, Input Param (script/api), event wallpaper

<b>Images in the videos tab</b>
It is possible to add images to the program's videos tab, so that the image behaves like a video, being displayed by VLC Player, for example.
The default duration of an image played as a video is 10 seconds, which can be changed in the VLC Player settings (3 dots).
And you can change the duration of each image individually by clicking the right mouse button on the image.

<b>Import a video or image file directly into a slide</b>
You can drag a video or image file from your computer directly onto a slide in the font (or text) editing window to use it as the slide's background.
This is useful in cases where the user has videos or images ready for each paragraph of the song.
For example, if someone makes a "lyric video" with animations, and cuts the video into paragraphs, they can add the video as a specific background for each corresponding paragraph.
However, there is no need to add videos or images to the "my videos" or "my images" tab in the theme background window, preventing specific backgrounds from a song slide from being added and mixed with the themes' reusable backgrounds.

<b>"Context Action" functionality</b>
Enables the creation of scripts that receive information about a specific item that was executed.
When you right-click on a video, for example, a submenu will appear with the available scripts.
When selecting a script for action, the respective video will be sent as <b>"obj"</b> to the script to be executed.
This script can, for example, run the video itself received as a parameter, and start a countdown based on the video's duration.
Without necessarily creating a trigger for it.
In practice, it allows the user to create custom actions for items in the program, which can be quickly executed on any item with the right mouse button.

<b>Redirect Custom Message to JavaScript</b>
The <b>Custom Message</b> option in the program has its own interface for "capturing" specific variables, to display pre-formatted texts.
And it is compatible with the cell phone app.
An option has been implemented that causes the action of "displaying" a "Custom Message" to be redirected to a script, instead of being displayed on the screen (or in the alert).
This allows, for example, the user to create their own internal solutions that can receive information from the Holyrics mobile app itself, save this information and use it as necessary.
For example, you can create a <b>Custom Message</b> called "Visitors", with the field "Name".
Other people during the service can access the Holyrics app, in the <b>Personalized Message</b> tab, type their name and send it to Holyrics.
By redirecting the message received from the app to a script, the script can save these names in an internal list via jslib, and then the program operator on the computer can display all the names in the list via jslib with some Script item created and added to favorites .

<b>JSLib</b>
- New "Input" types for JavaScript interfaces.
<b>button</b>: allows you to create a button on the interface, which performs an action when clicked.
It allows, for example, to create an interface that receives user input to perform a specific action and a "button" input that opens another interface with settings.
So that it is not necessary to place several inputs in the same window
<b>label</b>: displays text content (updatable).
Allows you to generate some text for temporary result viewing, and also a "copy" icon to copy displayed content.

- Added request option via TCP

- Option to save content in TXT or XLSX