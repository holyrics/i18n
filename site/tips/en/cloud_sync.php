<p>
    To synchronize all program files and data between different computers, use cloud synchronization via Google Drive™ through the Share menu, option "Cloud Synchronization".
</p>
<p>
    When synchronization is enabled, there is no option to merge files.<br>
    The first computer added to the synchronization will upload its data and files to the cloud, and all computers connected AFTER that will have their data erased in order to download the current data from the cloud (usually the church computer should be connected first, as it generally contains all the data and files you need).<br>
    After connecting the first computer and completing the upload, you can connect as many other computers as you want, and everything done on one computer will be synchronized to the others.
</p>
<p>
    <b>Notes:</b><br>
    <br>
    • The program SETTINGS are not synchronized between computers.<br>
    <br>
    • The first connected computer does not mean it is the main computer of the synchronization. There is no "main computer". Changes made on any computer will be reflected on all other computers.<br>
    The note about paying attention to the first connected computer only refers to which computer will populate the cloud with the initial upload of the data.<br>
    This means the data is stored in the cloud, not on a specific computer. Consequently, even if all computers are disconnected and the program is reinstalled, you can log in and "recover" all data synchronized in the cloud (as long as you do not manually delete it or remove the authorization link in your Google account settings).<br>
    <br>
    • There is no permission control or management. All connected computers can modify any file in the program and those changes will be synchronized with the other computers.<br>
    <br>
    • For security reasons, you can generate a login code and give it to another person so they can add their personal computer to the synchronization instead of sharing the Google account email and password.<br>
    To generate the code, in the cloud synchronization login window there is a button <b>"Generate code for access on another device"</b>.<br>
    <br>
    • You can view and remotely disconnect other users through the <b>"Connected devices"</b> button.<br> 
    <br>
    • If necessary, when connecting a new computer (using email and password), you can replace the data in the cloud by selecting the option <b>"Delete online files and upload the files from this computer"</b>.<br>
    In this case, for security reasons, all computers already connected will be disconnected from the synchronization and will need to log in again and accept downloading the newly synchronized data.<br>
    <br>
    • The permission requested for the Google Drive API creates a hidden and exclusive folder for Holyrics.<br>
    The Holyrics program does not have access to your personal files on Google Drive and therefore files synchronized by Holyrics do not appear in your Google Drive.<br>
    To delete Holyrics data from your Google Drive account, go to: <a href='https://drive.google.com/drive/settings' target='_blank' rel='noopener noreferrer'>https://drive.google.com/drive/settings</a><br>
    <br>
    •  The synchronization logic implemented in the program removes a deleted file from Google Drive only after that file has been deleted on all computers. In other words, when you delete a file and the Google Drive synchronization status shows that the file was deleted, it may still occupy space in your Google Drive until all other computers connected to the synchronization open Holyrics and the program identifies that it should delete the file.<br>
    This means that, temporarily, the space used in Google Drive by Holyrics may be larger than the total space currently used by the existing files.<br>
    You can check which computers have not synchronized data for a long time through the "Connected devices" button and disconnect them if necessary.<br>
    <br>
    The synchronization LOG file is located in the program subfolder <code>.../logs/google_drive_sync_holyrics_files.txt</code> (usually <code>C:/Holyrics/logs/google_drive_sync_holyrics_files.txt</code> on Windows).<br>
    <br>
    • Currently only Google Drive synchronization is available and there are no plans for compatibility with other services.
</p>