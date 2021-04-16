<?php

	// IMPORTANT:
	// ==========
	// When translating, only translate the strings that are
	// TO THE RIGHT OF the equal sign (=).
	//
	// Do NOT translate the strings between square brackets ([])
	//
	// Also, leave the text between < and > untranslated.
	//
	// =====================================================
	// PLEASE NOTE:
	// ============
	// When a new version of AppGini is released, new strings
	// might be added to the "defaultLang.php" file. To translate
	// them, simply copy them to this file ("language.php") and 
	// translate them here. Do NOT translate them directly in 
	// the "defaultLang.php" file.
	// =====================================================
		


	// datalist.php
	$Translation['quick search'] = "
	Tìm kiếm nhanh";
	$Translation['records x to y of z'] = "Bản ghi <FirstRecord> thành <LastRecord> của <RecordCount>";
	$Translation['filters'] = "Bộ lọc";
	$Translation['filter'] = "Bộ lọc";
	$Translation['filtered field'] = "Trường đã lọc";
	$Translation['comparison operator'] = "Toán tử so sánh";
	$Translation['comparison value'] = "Giá trị so sánh";
	$Translation['and'] = "Và";
	$Translation['or'] = "Hoặc";
	$Translation['equal to'] = "Equal to";
	$Translation['not equal to'] = "Not equal to";
	$Translation['greater than'] = "Greater than";
	$Translation['greater than or equal to'] = "Greater than or equal to";
	$Translation['less than'] = "Less than";
	$Translation['less than or equal to'] = "Less than or equal to";
	$Translation['like'] = "Like";
	$Translation['not like'] = "Not like";
	$Translation['is empty'] = "Is empty";
	$Translation['is not empty'] = "Is not empty";
	$Translation['apply filters'] = "Apply filters";
	$Translation['save filters'] = "Save and apply filters";
	$Translation['saved filters title'] = "HTML Code For The Applied Filters";
	$Translation['saved filters instructions'] = "Copy the code below and paste it to an HTML file to save the filter you just defined so that you can return to it at any time in the future without having to redefine it. You can save this HTML code on your computer or on any server and access this prefiltered table view through it.";
	$Translation['hide code'] = "Hide this code";
	$Translation['printer friendly view'] = "Printer-friendly view";
	$Translation['save as csv'] = "Download as csv file (comma-separated values)";
	$Translation['edit filters'] = "Edit filters";
	$Translation['clear filters'] = "Clear filters";
	$Translation['order by'] = 'Order by';
	$Translation['go to page'] = 'Go to page:';
	$Translation['none'] = 'None';
	$Translation['Select all records'] = 'Select all records';
	$Translation['With selected records'] = 'With selected records';
	$Translation['Print Preview Detail View'] = 'Print Preview Detail View';
	$Translation['Print Preview Table View'] = 'Print Preview Table View';
	$Translation['Print'] = 'Print';
	$Translation['Cancel Printing'] = 'Cancel Printing';
	$Translation['Cancel Selection'] = 'Cancel Selection';
	$Translation['Maximum records allowed to enable this feature is'] = 'Maximum records allowed to enable this feature is';
	$Translation['No matches found!'] = 'Không có kết quả tìm thấy !!!';
	$Translation['Start typing to get suggestions'] = 'Start typing to get suggestions.';

	// _dml.php
	$Translation['are you sure?'] = 'Bạn có chắc chắn muốn xóa  không?';
	$Translation['add new record'] = '
	Thêm bản ghi mới';
	$Translation['update record'] = '
	Cập nhật hồ sơ';
	$Translation['delete record'] = '
	Xóa hồ sơ';
	$Translation['deselect record'] = '
	Bỏ chọn bản ghi';
	$Translation["couldn't delete"] = '
	Không thể xóa bản ghi do sự hiện diện của (các) bản ghi liên quan <RelatedRecords> trong bảng [<TableName>]';
	$Translation['confirm delete'] = 'Bản ghi này có (các) bản ghi liên quan <RelatedRecords> trong bảng [<TableName>]. Bạn vẫn muốn xóa nó? <Xóa> & nbsp; <Hủy>';
	$Translation['yes'] = 'Có';
	$Translation['no'] = 'Không';
	$Translation['pkfield empty'] = ' 
	trường là trường khóa chính và không được để trống.';
	$Translation['upload image'] = '
	Tải lên tệp mới ';
	$Translation['select image'] = '
	Chọn một hình ảnh ';
	$Translation['remove image'] = '
	Xóa tệp';
	$Translation['month names'] = 'January,February,March,April,May,June,July,August,September,October,November,December';
	$Translation['field not null'] = 'Bạn không thể để trống trường này.';
	$Translation['*'] = '*';
	$Translation['today'] = 'Today';
	$Translation['Hold CTRL key to select multiple items from the above list.'] = 'Hold CTRL key to select multiple items from the above list.';
	$Translation['Save New'] = 'Lưu mới';
	$Translation['Save As Copy'] = 'Save As Copy';
	$Translation['Deselect'] = 'Cancel';
	$Translation['Add New'] = 'Thêm Mới';
	$Translation['Delete'] = 'Xóa';
	$Translation['Cancel'] = 'Hủy';
	$Translation['Print Preview'] = 'In';
	$Translation['Save Changes'] = '
	Lưu thay đổi';
	$Translation['CSV'] = 'lưu CSV';
	$Translation['Reset Filters'] = 'Hiện Tất Cả';
	$Translation['Find It'] = '
	Tìm ';
	$Translation['Previous'] = '
	Trước';
	$Translation['Next'] = 'Sau';
	$Translation['Back'] = 'Trước';

	// lib.php
	$Translation['select a table'] = "Đi tới ...";
	$Translation['homepage'] = "Trang chủ";
	$Translation['error:'] = "Error:";
	$Translation['sql error:'] = "SQL error:";
	$Translation['query:'] = "Query:";
	$Translation['< back'] = "Back";
	$Translation["if you haven't set up"] = "If you haven't set up the database yet, you can do so by clicking <a href='setup.php'>here</a>.";
	$Translation['file too large']="Error: The file you uploaded exceeds the maximum allowed size of <MaxSize> KB";
	$Translation['invalid file type']="Error: This file type is not allowed. Only <FileTypes> files can be uploaded";

	// setup.php
	$Translation['goto start page'] = "Back to start page";
	$Translation['no db connection'] = "Couldn't establish a database connection.";
	$Translation['no db name'] = "Couldn't access the database named '<DBName>' on this server.";
	$Translation['provide connection data'] = "Please provide the following data to connect to the database:";
	$Translation['mysql server'] = "MySQL server (host)";
	$Translation['mysql username'] = "MySQL Username";
	$Translation['mysql password'] = "MySQL password";
	$Translation['mysql db'] = "Database name";
	$Translation['connect'] = "Connect";
	$Translation['couldnt save config'] = "Couldn't save connection data into 'config.php'.<br />Please make sure that the folder:<br />'".dirname(__FILE__)."'<br />is writable (chmod 775 or chmod 777).";
	$Translation['setup performed'] = "Setup already performed on";
	$Translation['delete md5'] = "If you want to force setup to run again, you should first delete the file 'setup.md5' from this folder.";
	$Translation['table exists'] = "Table <b><TableName></b> exists, containing <NumRecords> records.";
	$Translation['failed'] = "Failed";
	$Translation['ok'] = "Ok";
	$Translation['mysql said'] = "MySQL said:";
	$Translation['table uptodate'] = "Table is up-to-date.";
	$Translation['couldnt count'] = "Couldn't count records of table <b><TableName></b>";
	$Translation['creating table'] = "Creating table <b><TableName></b> ... ";

	// separateDVTV.php
	$Translation['please wait'] = "Vui lòng đợi
	";

	// _view.php
	$Translation['tableAccessDenied']="Lấy làm tiếc! Bạn không có quyền truy cập bảng này. Vui lòng liên hệ với quản trị viên.";

	// incCommon.php
	$Translation['not signed in']="Bạn Chưa Đăng Nhập";
	$Translation['sign in']="Đăng Nhập";
	$Translation['signed as']="Đăng ký với tư cách là";
	$Translation['sign out']="Đăng Xuất";
	$Translation['admin setup needed']="Thiết lập quản trị không được thực hiện. Vui lòng đăng nhập vào <a href=admin/> bảng điều khiển quản trị </a> để thực hiện thiết lập.Thiết lập quản trị không được thực hiện. Vui lòng đăng nhập vào <a href=admin/> bảng điều khiển quản trị </a> để thực hiện thiết lập.";
	$Translation['db setup needed']="Thiết lậpchưa được thực hiện. Trước tiên, hãy đăng nhập vào <a href=setup.php> trang thiết lập </a>.";
	$Translation['new record saved']="Bản ghi mới đã được lưu thành công.";
	$Translation['record updated']=" lưu thành công.";

	// index.php
	$Translation['admin area']="
	Khu vực quản trị";
	$Translation['login failed']="Đăng Nhập Của Bạn Không Thành Công Thử Lại.";
	$Translation['sign in here']="Đăng Nhập";
	$Translation['remember me']="Nhớ Tôi";
	$Translation['username']="Tài Khoản";
	$Translation['password']="Mật Khẩu";
	$Translation['go to signup']="Bạn Chưa Có Tài Khoản <br /> & nbsp; <a href=membership_signup.php> Đăng ký tại đây </a>";
	$Translation['forgot password']="Quên Mật Khẩu? <a href=membership_passwordReset.php>Click vào đây</a>";
	$Translation['browse as guest']="<a href=index.php> Tiếp tục duyệt với tư cách khách</a>";
	$Translation['no table access']="Bạn không có đủ quyền để truy cập bất kỳ trang nào ở đây. Vui lòng đăng nhập trước.";
	$Translation['signup']="Đăng Kí";

	// checkMemberID.php
	$Translation['user already exists']="Username '<MemberID>' already exists. Try another username.";
	$Translation['user available']="Tài Khoản '<MemberID>'Hợp Lệ.";
	$Translation['empty user']="Please type a username in the box first then click 'Check availability'.";

	// membership_thankyou.php
	$Translation['thanks']="Cảm ơn bạn đã đăng ký!";
	$Translation['sign in no approval']=" bạn có thể đăng nhập ngay bây giờ <a href=index.php?signIn=1> tại đây </a>";
	$Translation['sign in wait approval']="Nếu bạn đã chọn một nhóm yêu cầu sự chấp thuận của quản trị viên, vui lòng đợi email xác nhận sự chấp thuận của bạn.";

	// membership_signup.php
	$Translation['username empty']="Bạn phải cung cấp tên người dùng. Vui lòng quay lại và nhập tên người dùng";
	$Translation['password invalid']="Bạn phải cung cấp mật khẩu gồm 4 ký tự trở lên, không có dấu cách. Vui lòng quay lại và nhập mật khẩu hợp lệ";
	$Translation['password no match']="Mật khẩu không khớp. Vui lòng quay lại và sửa lại mật khẩu";
	$Translation['username exists']="Tài Khoản đã có người dùng. Vui lòng quay lại và chọn một Tài Khoản khác.";
	$Translation['email invalid']="Địa chỉ email không hợp lệ. Vui lòng quay lại và sửa lại địa chỉ email của bạn.";
	$Translation['group invalid']="Nhóm không hợp lệ. Vui lòng quay lại và chỉnh sửa lựa chọn nhóm.";
	$Translation['sign up here']="Đăng Kí!";
	$Translation['registered? sign in']="Đã đăng ký? <a href=index.php?signIn=1> Đăng nhập tại đây </a>.";
	$Translation['sign up disabled']="Xin Lỗi! Đăng ký tạm thời bị vô hiệu hóa bởi quản trị viên. Thử lại sau.";
	$Translation['check availability']="Check if this username is available";
	$Translation['confirm password']="Nhập Lại Mật Khẩu";
	$Translation['email']="Email";
	$Translation['group']="Nhóm";
	$Translation['groups *']="Nếu bạn chọn đăng ký vào một nhóm  (*), bạn sẽ không thể đăng nhập cho đến khi quản trị viên chấp thuận bạn. Bạn sẽ nhận được một email khi bạn được chấp thuận.";
	$Translation['sign up']="Đăng Kí";

	// membership_passwordReset.php
	$Translation['password reset']="Trang đặt lại mật khẩu";
	$Translation['password reset details']="Nhập tên người dùng hoặc địa chỉ email của bạn dưới đây. Sau đó, chúng tôi sẽ gửi một liên kết đặc biệt đến email của bạn. Sau khi nhấp vào liên kết đó, bạn sẽ được yêu cầu nhập mật khẩu mới.";
	$Translation['password reset subject']="Hướng dẫn đặt lại mật khẩu";
	$Translation['password reset message']="Kính gửi thành viên, \n Nếu bạn đã yêu cầu đặt lại / thay đổi mật khẩu của mình, vui lòng nhấp vào liên kết này: \n <ResetLink> \n\nNếu bạn không yêu cầu đặt lại / thay đổi mật khẩu, vui lòng bỏ qua thông báo này. \n\n Trân trọng.";
	$Translation['password reset ready']="Một email với hướng dẫn đặt lại mật khẩu đã được gửi đến địa chỉ email đã đăng ký của bạn. Vui lòng làm theo hướng dẫn trong email đó. <br /> <br /> Nếu bạn không nhận được email này trong vòng 5 phút, hãy thử đặt lại mật khẩu của bạn và đảm bảo bạn nhập đúng tên người dùng hoặc địa chỉ email.";
	$Translation['password reset invalid']="Sai Tài Khoản hoặc Mật Khẩu. <a href=membership_passwordReset.php> Thử lại </a> hoặc <a href=index.php> quay lại trang chủ </a>.";
	$Translation['password change']="Password Change Page";
	$Translation['new password']="New password";
	$Translation['password reset done']="Mật khẩu của bạn đã được thay đổi thành công. Bạn có thể <a href=index.php?signOut=1> đăng nhập bằng mật khẩu mới tại đây </a>.";

    $Translation['Loading ...']='Loading ...';
    $Translation['No records found']='No records found';
    $Translation['You can add children records after saving the main record first']='Bạn có thể thêm bản ghi con sau khi lưu bản ghi chính trước';

    $Translation['ascending'] = 'Ascending';
    $Translation['descending'] = 'Descending';
    $Translation['then by'] = 'Then by';

	// membership_profile
	$Translation['Legend'] = 'Huyền thoại';
	$Translation['Table'] = 'Bảng';
	$Translation['Edit'] = 'Chỉnh sửa';
	$Translation['View'] = 'Xem';
	$Translation['Only your own records'] = 'Only your own records';
	$Translation['All records owned by your group'] = 'All records owned by your group';
	$Translation['All records'] = 'All records';
	$Translation['Not allowed'] = 'Not allowed';
	$Translation['Your info'] = 'Your info';
	$Translation['Hello user'] = 'Hello %s!';
	$Translation['Your access permissions'] = 'Your access permissions';
	$Translation['Update profile'] = 'Update profile';
	$Translation['Update password'] = 'Update password';
	$Translation['Change your password'] = 'Change your password';
	$Translation['Old password'] = 'Old Password';
	$Translation['Password strength: weak'] = 'Password strength: weak';
	$Translation['Password strength: good'] = 'Password strength: good';
	$Translation['Password strength: strong'] = 'Password strength: strong';
	$Translation['Wrong password'] = 'Wrong password';
	$Translation['Your profile was updated successfully'] = 'Your profile was updated successfully';
	$Translation['Your password was changed successfully'] = 'Your password was changed successfully';
	$Translation['Your IP address'] = 'Your IP address';
	
	/* Added in AppGini 4.90 */
	$Translation['Records to display'] = 'Records to display';
	
	/* Added in AppGini 5.10 */
	$Translation['Setup Data'] = 'Setup Data';
	$Translation['Database Information'] = 'Database Information';
	$Translation['Admin Information'] = 'Admin Information';
	$Translation['setup intro 1'] = 'There doesn\'t seem to be a configuration file. This is necessary for the application to work.<br><br>This setup page will help you create that file. But in some server configurations this might not work. In that case you might need to adjust the folder permissions, or create the config file manually.';
	$Translation['setup intro 2'] = 'Welcome to your new AppGini application! Before getting started, we need some information about your database. You will need to know the following before proceeding:<ol><li>Database server (host)</li><li>Database name</li><li>Database username</li><li>Database password</li></ol>The above items were probably supplied to you by your web hosting provider. If you do not have this information, then you will need to contact them or refer to their service documentation before you can continue here. If you\'re ready, let\'s start!';
	$Translation['setup finished'] = '<b>Success!</b><br><br>Your AppGini application has been installed. Here are some suggestions to begin using it:';
	$Translation['setup next 1'] = 'Start using your application to add data, or work with existing data, if any.';
	$Translation['setup next 2'] = 'Import existing data into your application from a CSV file.';
	$Translation['setup next 3'] = 'Go to the admin homepage where you can change many other application settings.';
	$Translation['db_name help'] = 'The name of the database you want to run your AppGini application in.';
	$Translation['db_server help'] = '<i>localhost</i> works on most servers. If not, you should be able to get this info from your web hosting provider.';
	$Translation['db_username help'] = 'Your MySQL username';
	$Translation['db_password help'] = 'Your MySQL password';
	$Translation['username help'] = 'Specify the admin username you\'d like to use to access the admin area. Must be four characters or more.';
	$Translation['password help'] = 'Specify a strong password to access the admin area.';
	$Translation['email help'] = 'Enter the email address where you want admin notifications to be sent.';
	$Translation['Continue'] = 'Continue ...';
	$Translation['Lets go'] = 'Let\'s go!';
	$Translation['Submit'] = 'Submit';
	$Translation['Hide'] = 'Hide help';
	$Translation['Database info is correct'] = '&#10003; Database info is correct!';
	$Translation['Database connection error'] = '&#10007; Database connection error!';
	$Translation['The following errors occured'] = 'The following errors occured';
	$Translation['failed to create config instructions'] = 'This is most probably due to folder permissions that are set to prevent creating files by your web server. Don\'t worry! You can still create the config file manually.<br><br>Just paste the following code into a text editor and save the file as "config.php", then upload it using FTP or any other method to the folder %s on your server.';
	$Translation['Only show records having filterer'] = 'Only show records where %s is %s';
	
	/* Added in AppGini 5.20 */
	$Translation['You don\'t have enough permissions to delete this record'] = 'You don\'t have enough permissions to delete this record';
	$Translation['Couldn\'t delete this record'] = 'Couldn\'t delete this record';
	$Translation['The record has been deleted successfully'] = 'The record has been deleted successfully';
	$Translation['Couldn\'t save changes to the record'] = 'Couldn\'t save changes to the record';
	$Translation['Couldn\'t save the new record'] = 'Couldn\'t save the new record';
	
	/* Added in AppGini 5.30 */
	$Translation['More'] = 'Nhiều hơn';
	$Translation['Confirm deleting multiple records'] = 'Confirm deleting multiple records';
	$Translation['<n> records will be deleted. Are you sure you want to do this?'] = '<n> records will be deleted. Are you sure you want to do this?';
	$Translation['Yes, delete them!'] = 'Yes, delete them!';
	$Translation['No, keep them.'] = 'No, keep them.';
	$Translation['Deleting record <i> of <n>'] = 'Deleting record <i> of <n>';
	$Translation['Delete progress'] = 'Delete progress';
	$Translation['Show/hide details'] = 'Show/hide details';
	$Translation['Connection error'] = 'Connection error';
	$Translation['Add more actions'] = 'Add more actions';
	$Translation['Update progress'] = 'Update progress';
	$Translation['Change owner'] = 'Change owner';
	$Translation['Updating record <i> of <n>'] = 'Updating record <i> of <n>';
	$Translation['Change owner of <n> selected records to'] = 'Change owner of <n> selected records to';

	/* Added in AppGini 5.40 */
	$Translation['username invalid'] = 'Tên người dùng <MemberID> đã tồn tại hoặc không hợp lệ. Đảm bảo bạn cung cấp tên người dùng chứa 4 đến 20 ký tự hợp lệ.';
	$Translation['permalink'] = 'Permalink';
	$Translation['invalid provider'] = 'Invalid provider!';
	$Translation['invalid url'] = 'Invalid URL!';
	$Translation['cant retrieve coordinates from url'] = 'Can\'t retrieve coordinates from URL!';

	/* Added in AppGini 5.51 */
	$Translation['maintenance mode admin notification'] = 'Maintenance mode is enabled! You can disable it from the admin home page.';
	$Translation['unique field error'] = 'This value already exists or is invalid. Please make sure to specify a unique valid value.';

	/* Added in AppGini 5.60 */
	$Translation['show all user records from table'] = 'Show all records of this user from "<tablename>" table';
	$Translation['show all group records from table'] = 'Show all records of this group from "<tablename>" table';
	$Translation['email this user'] = 'Email this user';
	$Translation['email this group'] = 'Email this group';
	$Translation['owner'] = 'Owner';
	$Translation['created'] = 'Created';
	$Translation['last modified'] = 'Last modified';
	$Translation['record has no owner'] = 'This record has no assigned owner. You can assign an owner from the admin area.';
	$Translation['admin-only info'] = 'The above info is displayed because you are currently signed in as the super admin. Other users won\'t see this.';
	$Translation['discard changes confirm'] = 'Discard changes to this record?';

	/* Added in AppGini 5.70 */
	$Translation['hide/show columns'] = 'Hide/Show columns';
	$Translation['next column'] = 'Next column';
	$Translation['previous column'] = 'Previous column';