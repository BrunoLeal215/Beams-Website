<!DOCTYPE html>
<html>
    <head>
        <?php include_once('Template/Head.php'); ?>
    </head>
    <body class="page-template-contact full-content wide red header-absolute menu-hover-edge">
        <?php $page = 'support'; include_once('Template/TopMenu.php'); ?>
        
    <div class="container">
    <div class="row">
        <section id="content" class="site-content hfeed site-content col-xs-12 col-sm-12 col-md-12" role="main">
        <div class="fitsc-row ">
            <div class="row">
                <div class="fitsc-space fitsc-space-about-3"></div>
                <div class="fitsc-column col-md-12 col-sm-12 col-xs-12">
                    
                <div class="fitsc-space"></div>
                <h5 class="fitsc-heading fitsc-heading-default fitsc-font-medium clearfix"><span>WHAT'S NEW</span></h5>
                
                <h5 class="cufon">Note, if you have an error updating mentioning &#8220;Mono.Security&#8221;, 
                    please click <a href="http://www.beamsbuild.com.au/files/BeamsHotfixInstaller2.exe">
                        <font color="red">here</font></a> to download a hotfix.</h5>
                
                <div class="fitsc-space"></div>
                
                <h5 class="cufon">New in version 3.3.5833 (21st December 2015)</h5>
                <ul>
                <li>- Modern estimating : add locking function to lock the location and display calculated measure in build mode</li>
                <li>- Modern contract : assign the cost centre number automatically during order split.</li>
                <li>- Creditor invoice : pop up the notification when user is trying to enter invoice against  cancelled order.</li>
                </ul>
                
                
                <h5 class="cufon">New in version 3.4.5816.24418 (4th December 2015)</h5>
                <ul>
                <li>- Modern view :<br />
                It can be set from user list permission and login screen.<br />
                Job wizard will now be used during the job creation.<br />
                Estimate and contract add or edit can be viewed in different monitor.<br />
                Multiple tabs are enabled to switch easily between forms .<br />
                Show prescription is no longer available in estimate add or edit.<br />
                The markup per item will now visible in estimate add or edit.<br />
                Background colour changed to distinguish between estimate, contract, account, and<br />
                setting.<br />
                Font has been replaced throughout Beams in forms and reports.</li>
                </ul>
                <p>&nbsp;</p>
                <ul>
                <li>- Bank Reconciliation : Add option to import bank statement (.ofx and .qif)<br />
                The retention amount is now available in the percentage claim.<br />
                The variation list is no longer deleted upon confirming the variation, which then<br />
                enables the user to undo the variation on deleting a confirmed variation.<br />
                Administrator role is  required to set the default job template.<br />
                Payroll Processing : Termination annual leave can be done in much simpler way, including<br />
                the marginal rate and fixed rate 31.5%.<br />
                Custom Field : The report will now available to display any custom fields.<br />
                Call forward : add another option to rebuild everything, including the finished items.<br />
                Rename the margin definition to markup.<br />
                User list permission : the user will now be able to hide the reschedule email notification.<br />
                Reschedule email notification : add notified button to mark the order changes to<br />
                be notified without sending the actual email.<br />
                Creditor and Debtor enquiry : Now shows the supplier and client name in the grid.<br />
                Purpose report will now also show the specification and trade note.<br />
                A replace function has been provided for materials and locations (only available<br />
                for administrator)<br />
                Location edit form now allows for add, update, delete and replace for all location<br />
                groups.<br />
                Added the show tax option for purchase orders to the supplier print options which<br />
                used to be set as default to true.<br />
                Material import  : improve the import process into different price file and supplier.<br />
                Added the addenda text to estimate and contract variations.<br />
                Disabled the estimate variation wizard when the company is using build on material,<br />
                instead of build on purpose.<br />
                No longer rounding the cents to full dollars during the issue of progress claims.<br />
                Added an estimate erosion field to the job analysis summary to show the difference<br />
                between the original estimate and budget.</li>
                </ul>
                <p>&nbsp;</p>
                <ul>
                <li>- Technical update :<br />
                Update use Beams in 64 bit if available with for improved performance and reliability.<br />
                Service control :  The SSL certificate can now be selected from the drop down.<br />
                Add a command line option for database back up.</li>
                </ul>
                <h5 class="cufon">New in version 3.3.5798 (16th November 2015)</h5>
                <ul>
                <li>- Bank reconciliation is now only accessible by the user with financial permission.</li>
                <li>- Fixed a rare issue with negative value in the wizard.</li>
                </ul>
                <h5 class="cufon">New in version 3.3.5787 (5th November 2015)</h5>
                <ul>
                <li>- CADImage PDF Export now handles orientation changes better.</li>
                <li>- Fixed a bug where users could be sitting at the Connecting to Database screen forever.</li>
                <li>- Fixed a rare instance of combo boxes not showing up when using Remote Desktop.</li>
                <li>- Added an error message when the connection to the Beams License server is blocked.</li>
                <li>- Fixed a bug which would result in duplicate items showing in Bank Reconciliation</li>
                <li>- Fixed a rare issue where the GST would not recalculate when changing the contract value.</li>
                </ul>
                <h5 class="cufon">New in version 3.3.5779 (28th October 2015)</h5>
                <ul>
                <li>- All price files will now be shown for materials in the contract edit section. If it is assigned to an archived supplier, it will be shown in red.</li>
                <li>- Fixed a bug when trying to clear the creditor payments note section.</li>
                <li>- Fixed balances showing in the Cashbook report when an account is linked to a different account last year.</li>
                <li>- Add option to hide item in variation details report.</li>
                <li>- Percent claim preview will now include the note and reference.</li>
                <li>- Superstream payment file will now include all superannuation payments, including the one which is used as the clearing house.</li>
                </ul>
                <h5 class="cufon">New in version 3.3.5767 (16th October 2015)</h5>
                <ul>
                <li>- Various fixes in CADImage including a rare issue that would cause rafters to display against the wrong purpose.</li>
                <li>- We reworked the CSV parser so it will be more reliable in all instances.</li>
                <li>- Fixed the &#8220;More&#8221; button in the Administration window when looking at suppliers.</li>
                </ul>
                <h5 class="cufon">New in version 3.3.5752 (1st October 2015)</h5>
                <ul>
                <li>- Display fix for Windows 10 user.</li>
                <li>- Report Editor fix for the custom logo.</li>
                <li>- Exclude the gst line from the debtor invoice report.</li>
                <li>- Fix the rare crash which may happen during the email sending.</li>
                <li>- Beams Help is now open on top of the forms.</li>
                <li>- Closing the message box will give &#8220;no&#8221; as the answer.</li>
                </ul>
                <h5 class="cufon">New in version 3.3.5744 (23rd September 2015)</h5>
                <ul>
                <li>- Creditor Invoice Split : Enable to mark the split line as disputed.</li>
                <li>- Invoice Analysis and Trial balance Report : Enable to grid filter to work in the report.</li>
                <li>- Quote : Include all the material which has &#8220;Prime Cost&#8221; in their description.</li>
                <li>- Progress Claim Statement Report : Include the general journal entry.</li>
                <li>- Payroll : Bug fix for the payroll adjustment when is being allocated to a specific job and when the employee does not have any superannuation.</li>
                <li>- Minor bug fixes for CADImage.</li>
                <li>- Estimate Variation Confirm : Enable to reprice the variation when the gst amount is 0.</li>
                <li>- Variation Confirm : Revert the record type to &#8216;E&#8217; or &#8216;C&#8217; when all the pending variation is being deleted for that record.</li>
                </ul>
                <h5 class="cufon">New in version 3.3.5709 (19th August 2015)</h5>
                <ul>
                <li>- New features for CADImage:
                <ul style="text-indent: 10px; list-style-position: inside;">
                <li>- Various updates.</li>
                </ul>
                </li>
                <li>- Payroll : Add the pay week days for each employee. It can be set from the employee payroll window.</li>
                <li>- Creditor, Debtor enquiry: The invoice list is now grouped based on the header, instead of listing all the lines.</li>
                <li>- Bank Reconciliation : tighten the security to make sure that the statement number is always entered.</li>
                <li>- Quote Request : add the description into the automated table.</li>
                <li>- Calculator : fix the minor bug about the description field in the second iteration.</li>
                <li>- Export custom report : fix the bug when the custom report is being sent straight to the printer.</li>
                </ul>
                <h5 class="cufon">New in version 3.3.5701 (11th August 2015)</h5>
                <ul>
                <li>- New features for CADImage:
                <ul style="text-indent: 10px; list-style-position: inside;">
                <li>- Various updates.</li>
                </ul>
                </li>
                <li>- New features for Estimating process:
                <ul style="text-indent: 10px; list-style-position: inside;">
                <li>- Add default template choice to set the specific plan to be the default template for the specific plan type.</li>
                <li>- The empty plan will be automatically pre-loaded with the default template.</li>
                </ul>
                </li>
                <li>- New features for Creditor, Debtor, and Order report:
                <ul style="text-indent: 10px; list-style-position: inside;">
                <li>- Add material category as the grouping option.</li>
                <li>- Enable to hide the unwanted grouping.</li>
                </ul>
                </li>
                <li>- Orders : disable the message if no call forward is selected.</li>
                <li>- Trial balance report : now correspond to the form filtering.</li>
                <li>- Electronic TPAR : show appropriate error message when the company address is written in incorrect format.</li>
                <li>- Debtor Invoice : incorporate the division price zone and margin when no job is selected.</li>
                <li>- Company : allow user to deselect the default division, as long as it is not the last one.</li>
                <li>- About : add the End User License Agreement for review.</li>
                </ul>
                <h5 class="cufon">New in version 3.3.5690 (31st July 2015)</h5>
                <ul>
                <li>- New features for CADImage:
                <ul style="text-indent: 10px; list-style-position: inside;">
                <li>- Add line thickness  for a purpose.</li>
                <li>- Add the ability to resize text objects and added constrain for 2 point lines.</li>
                </ul>
                </li>
                <li>- New features for Payroll Processing:
                <ul style="text-indent: 10px; list-style-position: inside;">
                <li>- Add superannuation exempt.</li>
                <li>- Enable to edit the chart of account.</li>
                </ul>
                </li>
                <li>- Creditor Invoice : notify the user when the order has not been printed.</li>
                <li>- Material : do not let the user empty the material cost.</li>
                <li>- Prescription : add round in 600 increments.</li>
                <li>- Debtor payments : fix the bug during receiving the disputed debtor invoice lines.</li>
                <li>- Contract Details Report : add the option to filter finished contract.</li>
                <li>- Financial Report : add the balance sheet movement month to month report.</li>
                <li>- Material Import : Automatically de-select the duplicate item.</li>
                <li>- Material : Fixed issue with Material Image appearing wrong on high DPI screens.</li>
                <li>- Quote Request : Include the part number in quote request for Contacts and Message Centre.</li>
                </ul>
                <h5 class="cufon">New in version 3.3.5674 (15th July 2015)</h5>
                <ul>
                <li>- Material : add the search button to allocate material to specific purpose.</li>
                <li>- Update the multi select indicator to be consistent.</li>
                <li>- Fix bug in the profit and loss report when the date is outside the financial year range.</li>
                <li>- Contact and message centre : store the client and supplier email during the print letter.</li>
                </ul>
                <h5 class="cufon">New in version 3.3.5668 (9th July 2015)</h5>
                <ul>
                <li>- Beams Mobile Server: Hotfix for &#8220;Login Incorrect&#8221; error when the login is correct.</li>
                </ul>
                <h5 class="cufon">New in version 3.3.5666 (7th July 2015)</h5>
                <ul>
                <li>- CADImage : pdf export now exports at the correct orientation.</li>
                <li>- Main menu : sort the division alphabetically.</li>
                <li>- Optimisation in creditor invoices.</li>
                </ul>
                <h5 class="cufon">New in version 3.3.5665 (6th July 2015)</h5>
                <ul>
                <li>- New features for CADImage:
                <ul style="text-indent: 10px; list-style-position: inside;">
                <li>- Added export wizard</li>
                </ul>
                </li>
                <li>- Beams Mobile: Fix bug when the order id is not showing for edited call forward description.</li>
                <li>- Accounts: Remove the limitation of 98 invoice lines.</li>
                <li>- Chart of Account : Do not allow to delete an account which has been allocated in payroll.</li>
                </ul>
                <h5 class="cufon">New in version 3.3.5660 (1st July 2015)</h5>
                <ul>
                <li>- Fix the rare issue that payment summary itemised can be wrong.</li>
                <li>- Enable to import and export material short description</li>
                </ul>
                <h5 class="cufon">New in version 3.3.5658 (29th June 2015)</h5>
                <ul>
                <li>- Updated Tax Tables for 2015-2016 financial year (Only HELP/SFSS has changed).</li>
                <li>- New features for CADImage:
                <ul style="text-indent: 10px; list-style-position: inside;">
                <li>- Changes to explode function make it more reliable</li>
                <li>- Added the roof fit option.</li>
                <li>- Added the short description for material.</li>
                </ul>
                </li>
                <li>- Beams Mobile: Added support for usernames with spaces when enabling server.</li>
                <li>- Call Forward : the finished progress claim which has been issued can no longer being edited.</li>
                </ul>
                <h5 class="cufon">New in version 3.3.5648 (19th June 2015)</h5>
                <ul>
                <li>- Ability to multi select variation to print.</li>
                <li>- Small hotfixes for Beams Messenger in the terminal server environment.</li>
                <li>- Payroll adjustment for employee&#8217;s hours which are assigned in timesheet.</li>
                </ul>
                <h5 class="cufon">New in version 3.3.5647 (18th June 2015)</h5>
                <ul>
                <li>- Supervisor Report can now be grouped by stage.</li>
                <li>- Small hotfixes for Beams Messenger to make it more reliable.</li>
                <li>- Add &#8220;can edit invoices&#8221; in user list permission to enable the user to edit contract invoice without giving them access to account section.</li>
                <li>- Increase the addenda field size.</li>
                <li>- Include the detached call forward, when the plan claim type for the call forward has been deleted.</li>
                <li>- Fix bug to always show updated information for the order summary report.</li>
                <li>- Fix array issue where some prescription lines do not get added.</li>
                </ul>
                <h5 class="cufon">New in version 3.3.5644 (15th June 2015)</h5>
                <ul>
                <li>- Users can now be marked as Inactive. Inactive users can not log on and will not show up in Beams Messenger.</li>
                <li>- Small hotfixes for Beams Messenger to make it more reliable.</li>
                <li>- Fix for CADImage when exploding a roof and the text would not display.</li>
                </ul>
                <h5 class="cufon">New in version 3.3.5639 (11th June 2015)</h5>
                <ul>
                <li>- The Schedule change window has been redesigned to make the process much easier.
                <ul style="text-indent: 10px; list-style-position: inside;">
                <li>- Items can now be set as &#8220;On Hold&#8221;</li>
                <li>- The budget percentage can now be set for each job.</li>
                </ul>
                </li>
                <li>- Job Tracking has been improved to make it easier to track the delays in a job
                <ul style="text-indent: 10px; list-style-position: inside;">
                <li>- An original scheduled date is stored for each item. This date can be locked so only an admin can edit it.</li>
                </ul>
                </li>
                <li>- New features for CADImage:
                <ul style="text-indent: 10px; list-style-position: inside;">
                <li>- Explode Text: you can now separate the text from a line</li>
                <li>- Select Max Length: click to select the maximum size for calculations.</li>
                <li>- Move points: specific points can now be moved when using the Move tool without moving the whole item.</li>
                <li>- Purpose and Material can now be selected with dropdowns instead of needing to click the Next button over and over.</li>
                <li>- CADImage now features a new &#8220;Metadata&#8221; system for each of the items in the list. Double-click on any item to access data about it.</li>
                <li>- PDF Files now zoom without distorting the image. This allows you to zoom right in without any loss of quality.</li>
                <li>- A warning will now be displayed when the calculate button is pressed if the Purpose, Location and Material don&#8217;t match the selected items.</li>
                <li>- Text will now wrap if it can&#8217;t fit on the line.</li>
                </ul>
                </li>
                <li>- Help Files will now always display correctly regardless of which version of Internet Explorer is on the system.</li>
                <li>- New BEAMS Messenger
                <ul style="text-indent: 10px; list-style-position: inside;">
                <li>- An inter-office communication system for users of both the Beams application and Beams Mobile (1.15 update coming soon).</li>
                <li>- Click on the &#8220;Online&#8221; button in the menu bar to access it.</li>
                </ul>
                </li>
                <li>- New Email system
                <ul style="text-indent: 10px; list-style-position: inside;">
                <li>- Emails will now be sent in the background and you can continue working while they&#8217;re sending.</li>
                </ul>
                </li>
                <li>- A pop-up alert will now appear if there are any reschedule emails to send.</li>
                <li>- Payroll records can now be assigned to all jobs, not only current jobs.</li>
                <li>- Pay Slips are now emailed as PDF attachments instead of inline.</li>
                <li>- Entering payroll leave entitlements is now much easier with the option of days per annum instead of just a percentage.</li>
                <li>- We&#8217;ve made the Issue Type more intuitive on the Delete or Reprint Orders screen.</li>
                <li>- The Email Log no longer displays pay slips if the user doesn&#8217;t have Financial Reports.</li>
                <li>- A blank Details Request Sheet can now be printed.</li>
                <li>- Fixed a permission issue where users could edit things they shouldn&#8217;t be allowed to.</li>
                <li>- Fixed issues several users encountered when their material names were longer than 50 characters.</li>
                <li>- Fixed an issue entering a new client from the new plan screen.</li>
                <li>- Fixed the longstanding issue of getting a &#8220;Concurrency Violation&#8221; error when attempting to edit records.</li>
                </ul>
                <p>&nbsp;</p>
                <h5 class="cufon">New in version 3.2.5581 (13th April 2015)</h5>
                <ul>
                <li>- Added custom field in job, client, supplier.</li>
                <li>- New features for CADImage:
                <ul style="text-indent: 10px; list-style-position: inside;">
                <li>- Areas now include an angle calculation.</li>
                <li>- Added Save button to custom fields window.</li>
                <li>- Added title block.</li>
                <li>- Lines are now able to be selected using the Select mode.</li>
                </ul>
                </li>
                <li>- New features in contract management:
                <ul style="text-indent: 10px; list-style-position: inside;">
                <li>- Enable the user to copy to another unit, similar to the estimate section.</li>
                </ul>
                </li>
                <li>- Order : fixed bug in ordering error for duplicated E item.</li>
                <li>- Wizard : bug fix to include material_unit in the locked items calculation.</li>
                <li>- Material : show all supplier (active / inactive) to avoid confusion in archived preferred supplier.</li>
                <li>- Progress schedule : set the fore colour to be red for zero contract value.</li>
                <li>- Fix bug from the creditors proof, posting, and general ledger report that was not showing outstanding payg invoices if the tax amount was included on a BAS.</li>
                <li>- Fix bug for invoiced figure in financial analysis report to include categorised general journal.</li>
                <li>- Fix bug when the user is unable to delete the last contact record.</li>
                </ul>
                <p>&nbsp;</p>
                <h5 class="cufon">New in version 3.2.5578 (10th April 2015)</h5>
                <ul>
                <li>- This is a hotfix for a rare crash that can occur on some computers when clicking on Main Menu.</li>
                </ul>
                <p>&nbsp;</p>
                <h5 class="cufon">New in version 3.2.5564 (27th March 2015)</h5>
                <ul>
                <li>- New features for CADImage:
                <ul style="text-indent: 10px; list-style-position: inside;">
                <li>- Added R hotkey for continued parallel lines: Create one parallel line, then hit R to repeat the line over and over.</li>
                <li>- Fixed text appearing in strange places when zoomed or on certain angles.</li>
                <li>- Snap has been adjusted to be considerably reliable now.</li>
                <li>- Fixed bug stopping users renaming tabs.</li>
                <li>- Angle, Waste and Rounding will now be stored with the selections so they get reloaded when clicked on.</li>
                </ul>
                </li>
                <li>- New features in contract management:
                <ul style="text-indent: 10px; list-style-position: inside;">
                <li>- Add the option to mark contract to be scheduled, which is only available for admin user.</li>
                <li>- C, E, N, P and V items will be locked for editing / adding when the contract has been scheduled.</li>
                </ul>
                </li>
                <li>- Record type report is now called erosion report. Job and date options has been added to the report.</li>
                <li>- Aged Debtor and Creditor have the option to show itemised for each jobs.</li>
                <li>- Mark GST line to be outstanding in payment and receipt deletion.</li>
                <li>- Fixed bug stopping users add the note in schedule item change window.</li>
                <li>- Fixed bug allocating the newly created split line to be in different payment.</li>
                </ul>
                <p>&nbsp;</p>
                <h5 class="cufon">New in version 3.2.5553 (16th March 2015)</h5>
                <ul>
                <li>- This version includes many new features for CADImage:
                <ul style="text-indent: 10px; list-style-position: inside;">
                <li>- Moved many of the functions to a toolbar at the top of the screen to tidy everything up.</li>
                <li>- Added more information to tooltips on many of the functions.</li>
                <li>- Values calculated in CADImage will now always round upwards.</li>
                <li>- Clicking Calculate while in Roof Mode will now include any LinMts selections as well.</li>
                <li>- Added options for the placement of text on a line.</li>
                <li>- Changed the line styles so they look much better now.</li>
                <li>- Text will now be the same relative size when zoomed.</li>
                </ul>
                </li>
                <li>- Material Descriptions now allow up to 100 characters.</li>
                <li>- Fixed an issue where call forward lists would show a duplicate item if there was a cancelled order.</li>
                <li>- Updated Payment Summaries for the new Payroll system.</li>
                <li>- Grids now no longer display rich text and can be used to filter as normal.</li>
                <li>- Plus many other bug fixes.</li>
                </ul>
                <p>&nbsp;</p>
                <h5 class="cufon">New in version 3.2.5543 (6th March 2015)</h5>
                <ul>
                <li>- This is an emergency hotfix for the issues introduced with the previous version that affected people with high DPI monitors.</li>
                </ul>
                <p>&nbsp;</p>
                <h5 class="cufon">New in version 3.2.5542 (5th March 2015)</h5>
                <ul>
                <li>- CADImage now has an icon for the selection type in the list, so it&#8217;s easier to identify why certain things are happening.</li>
                <li>- Fixed a bug causing roof calculations to fail in CADImage.</li>
                <li>- Added Rafter colour option for CADImage.</li>
                <li>- It&#8217;s now more clear when switching groups in CADImage as to which group is selected. This fixes inconsistencies with the &#8220;Clear Ticks&#8221; option.</li>
                <li>- Various other small bugs in CADImage.</li>
                </ul>
                <p>&nbsp;</p>
                <h5 class="cufon">New in version 3.2.5536 (27th February 2015)</h5>
                <ul>
                <li>- This release contains synchronisation enhancements for BeamsCRM.</li>
                </ul>
                <p>&nbsp;</p>
                <h5 class="cufon">New in version 3.2.5520 (11th February 2015)</h5>
                <ul>
                <li>- This is a hotfix release containing urgent bug fixes:
                <ul style="text-indent: 10px; list-style-position: inside;">
                <li>- Fixed payroll emailing function which email everyone&#8217;s payslips to each employees.</li>
                </ul>
                </li>
                </ul>
                <p>&nbsp;</p>
                <h5 class="cufon">New in version 3.2.5518 (9th February 2015)</h5>
                <ul>
                <li>- This is a hotfix release containing urgent bug fixes:
                <ul style="text-indent: 10px; list-style-position: inside;">
                <li>- Fixed creating a new contract if no external supervisor was selected.</li>
                <li>- Fixed ability to change material prices in wizard window if the user has no permission.</li>
                <li>- Fixed rare issue where locked items would change when the job is unloaded.</li>
                <li>- Creditor invoices screen now clears invoice ID when changing supplier.</li>
                </ul>
                </li>
                </ul>
                <p>&nbsp;</p>
                <h5 class="cufon">New in version 3.2.5515 (6th February 2015)</h5>
                <ul>
                <li>- <strong>Upgraded payroll system:</strong>
                <ul style="text-indent: 10px; list-style-position: inside;">
                <li>- Accruing leave for Long Service Leave and Flex/RDO days (in addition to Annual and Personal Leave)</li>
                <li>- Tracking of leave accrued and taken</li>
                <li>- Extra Payroll and Leave reports</li>
                <li>- Add new income items as you require them</li>
                <li>- Add new deduction (both pre tax and post tax) items as you require them</li>
                <li>- Override any system calculated amount (tax, super guarantee, leave accrued etc)</li>
                <li>- Full set of 23 ATO tax tables incorporating HELP and SFSS</li>
                <li>- Specify extra tax or tax rebates to be applied for particular employees</li>
                <li>- Leave Loading</li>
                <li>- Extra Reportable and Non Reportable superannuation deductions</li>
                <li>- Standard pays remembered for employees</li>
                </ul>
                </li>
                <li>- <strong>New CADImage features:</strong>
                <ul style="text-indent: 10px; list-style-position: inside;">
                <li>- New hotkeys for various features:
                <ul style="text-indent: 25px; list-style-position: inside;">
                <li>- C: toggles constrain</li>
                <li>- S: toggles snap</li>
                <li>- +: zoom in</li>
                <li>- -: zoom out</li>
                </ul>
                </li>
                <li>- Mirror image</li>
                <li>- Export to PDF</li>
                <li>- Parallel lines</li>
                <li>- Superimpose other plans on top of each other</li>
                <li>- New snap feature, the cursor will now snap to corners on plans (this can be turned on or off)</li>
                </ul>
                </li>
                <li>- BEAMS Mobile 1.14 compatible changes, including timesheets and adding variations</li>
                <li>- Backups now get compressed when they are saved, offering an average of 90% saving to the size compared to uncompressed</li>
                <li>- Provided a colour coded date in the progress claim window to indicate progress claims checked as completed and ready for issue. Unconfirmed variations are now displayed in red.</li>
                <li>- When changing the font and font size selection from the drawing tools now provides an option to store that selection as the default. This is applicable to RTF fields only.</li>
                <li>- Beams now stores the file location of a loaded job so when exporting or saving it will go to that location.</li>
                <li>- The client window includes a shortcut to the supervisor for entering external supervisors.</li>
                <li>- External supervisor now stores an email address that can be selected when emailing a debtor invoice from debtor invoices or progress claims</li>
                <li>- Added a wizard for the material import function to import formats other than BEAMS standard.</li>
                <li>- Added the ability to edit a material cost if material user permission is disabled, providing the material unit description is &#8220;Amount&#8221;</li>
                <li>- Work in Progress report now provides an option to display using either the brought forward amounts or the invoiced amounts</li>
                <li>- Many bug fixes and slight layout changes to windows</li>
                </ul>
                <p>&nbsp;</p>
                <h5 class="cufon">New in version 3.1.5456 (9th December 2014)</h5>
                <ul>
                <li>- Fixed the clients report from the Administration window.</li>
                <li>- Various bug fixes.</li>
                </ul>
                <p>&nbsp;</p>
                <h5 class="cufon">New in version 3.1.5451 (5th December 2014)</h5>
                <ul>
                <li>- Modifying a single item is now possible in CADImage with the wizard turned off.</li>
                <li>- Prescriptions can now be added on the fly in the middle of the Wizard.</li>
                <li>- <strong>New SuperStream feature:</strong>
                <ul style="text-indent: 10px; list-style-position: inside;">
                <li>- Employees can now be paid superannuation through a SuperStream Clearing House.</li>
                <li>- Added new abilities to report on the specific super funds instead of the clearing house.</li>
                <li>- Added the ability to produce a file of superannuation payments for uploading to your Clearing House. Only one format is available and it is up to your Clearing House to provide mapping facilities between the BEAMS Clearing House file and the format your Clearing House wants.</li>
                <li>- If an employee super fund is changed, unprocessed payments can be paid to the new fund when payments are next processed.</li>
                </ul>
                </li>
                <li>- Various windows now display much better on higher DPI screens.</li>
                <li>- Resources window now opens in Week View by default and allows you to select multiple status options to filter by.</li>
                <li>- Added an option to show the full details for creditors and debtors on the General Ledger report.</li>
                <li>- Added the Unreconcile Statement function on the Bank Reconcile screen to unreconcile a whole statement at a time (payments, receipts and general journals).</li>
                <li>- Added an End User License Agreement. Each user now needs to click Accept on this agreement to continue using BEAMS.</li>
                <li>- Updated BEAMS Mobile Server to support BEAMS Mobile 1.13 with the new Email Suppliers function.</li>
                <li>- Fonts used in the rich text editor are now saved for each user. Additional font options have been added to the Quotation Options window as well as many bugs fixed.</li>
                <li>- When exporting or saving any report, if a job is loaded, the default folder will now be the loaded job&#8217;s drawings folder.</li>
                <li>- Added a colour coded date in the Progress Claim window to indicate progress claims marked as completed and ready for issue.</li>
                <li>- Supervisor reports will now use filters if called from the Resources window plus added a supplier grouping for the calendar report.</li>
                <li>- Many bug fixes and slight layout changes to windows.</li>
                </ul>
                <p>&nbsp;</p>
                <h5 class="cufon">New in version 3.0.5409 (23rd October 2014)</h5>
                <ul>
                <li>- Fixed prescription issues where the number of items was not being recalculated correctly.</li>
                <li>- Provided additional features in the wizard where each item behaves as parent and child if de-activating an item.</li>
                <li>- Reset the controls size in CAD Image when resizing the selection list.</li>
                <li>- Fixed bug where the company default quotation letter would sometimes not save.</li>
                <li>- Confirmed the addition of the customer name to quotation if a division default is selected.</li>
                <li>- Requeried the supplier list from the contract quantities window when a new supplier is created.</li>
                <li>- Provided added checks when adding to Notepad variations where the margin may differ from the original variation.</li>
                <li>- Added function to reverse a cancelled percentage claim. When a debtor invoice is deleted, the amount is reversed from the claim template.</li>
                </ul>
                <p>&nbsp;</p>
                <h5 class="cufon">New in version 3.0.5402 (16th October 2014)</h5>
                <ul>
                <li>- Fixed display issues in Estimate Quantity and Show Invoices for users with high DPI monitors.</li>
                <li>- Added a what&#8217;s new button to the login screen.</li>
                <li>- Fixed issues with Bill of Quantities report when worksheet is being used.</li>
                </ul>
                <p>&nbsp;</p>
                <h5 class="cufon">New in version 3.0.5401 (15th October 2014)</h5>
                <ul>
                <li>- Added help topics to various windows. Press F1 in any window to see help relevant to that specific window.</li>
                <li>- Added trial functionality for new users testing out BEAMS for the first time.</li>
                </ul>
                <p>&nbsp;</p>
                <h5 class="cufon">New in version 3.0.5399 (13th October 2014)</h5>
                <ul>
                <li>- Updated application framework to 2014 version.</li>
                <li>- Added default debtor note to the footer of debtor statements.</li>
                <li>- Added subtraction capabilities to CADImage. This allows you to specify measurements as a negative item to make it easier to exclude areas.</li>
                <li>- Changed CADImage BC3 format to be more future friendly. Older BC3 files will still open, however they will be converted to the new format when saving.</li>
                <li>- Fixed a rare issue in Creditors Statement that could result in the wrong total amount being displayed.</li>
                <li>- Fixed various issues with Percentage Claim.</li>
                <li>- Fixed an issue where an incorrect job would be selected if BEAMS was closed without shutting down properly while a job was loaded.</li>
                </ul>
                <p>&nbsp;</p>
                
                
                </div>
            </div>
        </div>
        </section>
    </div>
</div>
        
    <?php include_once('Template/BottomMenu.php'); ?>
    </body>
</html>
