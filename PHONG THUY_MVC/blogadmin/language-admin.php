<?php

	// IMPORTANT:
	// ==========
	// When translating, only translate the strings that are
	// TO THE RIGHT OF the equal sign (=).
	//
	// Do NOT translate the strings between square brackets ([]) or <>
	//
	// Also, leave the text between < and > untranslated.
	//
	// =====================================================

	// incHeader.php
	$Translation['membership management'] = "Quản lý thành viên";
	$Translation['password mismatch'] = "Mật khẩu không khớp";
	$Translation['error'] = "Lỗi";
	$Translation['invalid email'] = "Địa chỉ email không hợp lệ";
	$Translation['sending mails'] = "Gửi thư có thể mất một chút thời gian. Vui lòng không đóng trang này cho đến khi bạn thấy thông báo 'Hoàn tất'.";
	$Translation['complete step 4'] = "Vui lòng hoàn thành bước 4 bằng cách chọn thành viên bạn muốn chuyển hồ sơ.";
	$Translation['info'] = "Thông tin";
	$Translation['sure move member'] = 'Bạn có chắc chắn muốn chuyển thành viên \'<MEMBER> \' và dữ liệu của anh ấy từ nhóm \'<OLDGROUP>\' sang nhóm \'<NEWGROUP> \' không?';
	$Translation['sure move data of member'] = 'Bạn có chắc chắn muốn di chuyển dữ liệu của thành viên \'<OLDMEMBER>\' từ nhóm \'<OLDGROUP> \' sang thành viên \'<NEWMEMBER> \' từ nhóm \'<NEWGROUP> \' không?';
	$Translation['sure move all members'] = 'Bạn có chắc chắn muốn di chuyển tất cả thành viên và dữ liệu từ nhóm \'<OLDGROUP> \' vào nhóm \'<NEWGROUP> \' không?';
	$Translation['sure move data of all members'] = 'Bạn có chắc chắn muốn di chuyển dữ liệu của tất cả các thành viên của nhóm \'<OLDGROUP> \' thành thành viên \'<MEMBER> \' từ nhóm \'<NEWGROUP> \' không?';
	$Translation['toggle navigation'] = "Chuyển đổi điều hướng thành";
	$Translation['admin area'] = "
	Khu vực quản trị";
	$Translation['groups'] = "Nhóm";
	$Translation['view groups'] = "Xem nhóm";
	$Translation['add group'] = "Thêm nhóm";
	$Translation['edit anonymous permissions'] = "Chỉnh sửa quyền ẩn danh";
	$Translation['members'] = "Thành viên";
	$Translation['view members'] = "Xem thành viên";
	$Translation['add member'] = "Thêm thành viên";
	$Translation["view members' records"] = "Xem hồ sơ thành viên";  
	$Translation["utilities"] = "Tiện ích"; 
	$Translation["admin settings"] = "Cài đặt quản trị viên"; 
	$Translation["rebuild thumbnails"] = "Tạo lại hình thu nhỏ"; 
	$Translation['rebuild fields'] = "Tạo lại các trường";
	$Translation['import CSV'] = "Nhập dữ liệu CSV";
	$Translation['batch transfer'] = "
	Trình hướng dẫn chuyển hàng loạt";
	$Translation['mail all users'] = "Gửi thư cho tất cả người dùng";
	$Translation['AppGini forum'] = "Diễn đàn cộng đồng AppGini";
	$Translation["user's area"] = 'Khu vực của người dùng';
	$Translation["sign out"] = "Đăng xuất";
	$Translation["attention"] = "Chú ý!";
	$Translation['security risk admin'] = '
	Bạn đang sử dụng tên người dùng và mật khẩu quản trị viên mặc định. Đây là một rủi ro bảo mật rất lớn. Vui lòng thay đổi ít nhất mật khẩu quản trị viên từ trang <a href="pageSettings.php"> Cài đặt quản trị </a> <em> ngay lập tức </em>.';
	$Translation['security risk'] = 'Bạn đang sử dụng mật khẩu quản trị mặc định. Đây là một rủi ro bảo mật rất lớn. Vui lòng thay đổi mật khẩu quản trị viên từ trang <a href="pageSettings.php"> Cài đặt quản trị </a> <em> ngay lập tức </em>.' ;
	$Translation['plugins'] = 'bổ sung';

	//pageAssignOwners.php
	$Translation["assigned table records to group"] = "Đã chỉ định các bản ghi <NUMBER> của bảng '<TABLE>' cho nhóm '<GROUP>'";
	$Translation["assigned table records to group and member"] = "Đã chỉ định các bản ghi <NUMBER> của bảng '<TABLE>' cho nhóm '<GROUP>', thành viên '<MEMBERID>'";
	$Translation['data ownership assign'] = "Chỉ định quyền sở hữu cho dữ liệu không có chủ sở hữu";
	$Translation['records ownership done'] = "Tất cả các bản ghi trong tất cả các bảng hiện đã có chủ sở hữu. <br> Quay lại <a href='pageHome.php'> Trang chủ quản trị </a>.";
	$Translation['select group'] = "Chọn nhóm";
	$Translation['data ownership'] = "Đôi khi, bạn có thể có các bảng chứa dữ liệu được nhập trước khi triển khai hệ thống quản lý thành viên AppGini này hoặc được nhập bằng các ứng dụng khác không biết về hệ thống quyền sở hữu AppGini. Dữ liệu này hiện không có chủ sở hữu. Trang này cho phép bạn chỉ định các nhóm chủ sở hữu và thành viên chủ sở hữu cho dữ liệu này.
	";
	$Translation["table"] = "Bảng";
	$Translation["records with no owners"] = "Hồ sơ không có chủ sở hữu";
	$Translation["new owner group"] = "Nhóm chủ sở hữu mới";
	$Translation["new owner member"] = "Thành viên mới của chủ sở hữu *";	
	$Translation["cancel"] = "Hủy";
	$Translation["assign new owners"] = "Chỉ định chủ sở hữu mới";
	$Translation["please wait"] = "Vui lòng đợi  ...";	
	$Translation["if no owner member assigned"] = '* Nếu bạn không chỉ định thành viên chủ sở hữu ở đây, bạn vẫn có thể sử dụng <a href="pageTransferOwnership.php"> Trình hướng dẫn chuyển hàng loạt </a> sau này để làm như vậy.';
	
	//pageDeleteGroup.php
	$Translation["can not delete group remove members"] = 'Không thể xóa nhóm này. Vui lòng xóa thành viên trước.';
	$Translation["can not delete group transfer records"] = 'Không thể xóa nhóm này. Vui lòng chuyển bản ghi dữ liệu của nó sang một nhóm khác trước ..';
	
	//pageEditGroup.php
	$Translation["group exists error"] = "Lỗi: Tên nhóm đã tồn tại.";
	$Translation["group not found error"] = "Lỗi: Không tìm thấy nhóm!";								 	
	$Translation["edit group"] = "Chỉnh sửa Nhóm '<GROUPNAME>'";
	$Translation["add new group"] = "Thêm nhóm mới";
	$Translation["anonymous group attention"] = "Chú ý! Đây là nhóm ẩn danh.";
	$Translation["show tool tips"] = "Hiển thị các mẹo công cụ khi di chuột qua các tùy chọn";
	$Translation["group name"] = "Tên nhóm";
	$Translation["readonly group name"] = "Tên của nhóm ẩn danh ở chế độ chỉ đọc .";
	$Translation["anonymous group name"] = "Nếu bạn đặt tên cho nhóm là '<ANONYMOUSGROUP>', nó sẽ được coi là nhóm ẩn danh <br> xác định quyền của khách truy cập không đăng nhập vào hệ thống.";
	$Translation["description"] = " miêu tả";
	$Translation["allow visitors sign up"] = 'Cho phép khách truy cập đăng ký?';
	$Translation["admin add users"] = "Không. Chỉ quản trị viên mới có thể thêm người dùng.";
	$Translation["admin approve users"] = "Đồng ý, và quản trị viên phải phê duyệt .";
	$Translation["automatically approve users"] = "Đồng ý, và tự động phê duyệt chúng.";
	$Translation["group table permissions"] = "Quyền bảng cho nhóm này";
	$Translation["no"] = "Không";
	$Translation["owner"] = "Owner";
	$Translation["group"] = "Nhóm";
	$Translation["all"] = "Tất cả";
	$Translation["insert"] = "
	Chèn";
	$Translation["view"] = "Xem";
	$Translation["edit"] = "Chỉnh Sửa";
	$Translation["delete"] = "Xóa";
	$Translation["save changes"] = "Lưu thay đổi";
	
	//pageEditMember.php
	$Translation["username error"] = "Lỗi:Tên người dùng đã tồn tại hoặc không hợp lệ. Đảm bảo bạn cung cấp tên người dùng chứa 4 đến 20 ký tự hợp lệ.";
	$Translation["member not found"] = "Lỗi: Không tìm thấy thành viên!";
	$Translation["user has special permissions"] = "Người dùng này có các quyền đặc biệt ghi đè các quyền nhóm .";
	$Translation["user has group permissions"] = 'Người dùng này kế thừa quyền <a href="pageEditGroup.php?groupID=<GROUPID> "> của nhóm  </a>.';
	$Translation["set user special permissions"] = 'Đặt quyền đặc biệt cho người dùng này';
	$Translation["sure continue"] = "Nếu bạn đã thực hiện bất kỳ thay đổi nào đối với thành viên này và chưa lưu chúng, chúng sẽ bị mất nếu bạn tiếp tục. Bạn có chắc chắn muốn tiếp tục không?";
	$Translation["edit member"] = "Chỉnh sửa thành viên <MEMBERID>" ;
	$Translation["add new member"] = "Thêm Mới Thành Viên";
	$Translation["anonymous guest member"] = "Chú ý! Đây là thành viên ẩn danh (khách).";
	$Translation["admin member"] = 'Chú ý! Đây là thành viên quản trị. Bạn không thể thay đổi tên người dùng, mật khẩu hoặc email của thành viên này tại đây, nhưng bạn có thể làm như vậy trong trang <a href="pageSettings.php"> cài đặt quản trị viên </a>.';
	$Translation["member username"] = "Tên thành viên";
	$Translation["check availability"] = "kiểm tra";
	$Translation["read only username"] = "Tên người dùng của thành viên khách .";
	$Translation["password"] = "Mật Khẩu";
	$Translation["change password"] = "Chỉ nhập mật khẩu nếu bạn muốn thay đổi mật khẩu <br> của thành viên này. Nếu không, hãy để trống trường này.";
	$Translation["confirm password"] = "Nhập Lại Mật Khẩu";
	$Translation["email"] = "Email";
	$Translation["approved"] = "Đồng ý?";
	$Translation["banned"] = "Bị cấm?";
	$Translation["comments"] = "
	Bình luận";
	$Translation["back to members"] = "Quay lại thành viên";
	$Translation["member added"] = "Thành viên <USERNAME> đã được thêm thành công";
	
	//pageEditMemberPermissions.php
	$Translation["member permissions saved"] = "Quyền thành viên đã được lưu thành công.";
	$Translation["member permissions reset"] = "Quyền thành viên đã được đặt lại giống như nhóm ";
	$Translation["user table permissions"] = "Quyền bảng đối với người dùng <a href='pageEditMember.php?memberID=<MEMBER> 'title =' Xem chi tiết thành viên '> <MEMBERID> </a> của nhóm <a href='pageEditGroup.php?groupID=<GROUPID> 'title =' Xem chi tiết và quyền của nhóm '> <GROUP> </a>";
	$Translation["no member permissions"] = '
	Thành viên này hiện không có bất kỳ quyền đặc biệt nào. Danh sách này hiển thị các quyền của nhóm ';
	$Translation["reset member permissions"] = "Đặt lại quyền thành viên";
	$Translation["remove special permissions"] = 'Điều này sẽ xóa tất cả các quyền đặc biệt của người dùng này và anh ta sẽ có các quyền tương tự như nhóm của mình. Bạn có chắc chắn muốn làm điều đó?';
	
	//pageEditOwnership.php
	$Translation["invalid table"] = "Bảng không hợp lệ.";
	$Translation["invalid primary key"] = "Giá trị khóa chính không hợp lệ";
	$Translation["record not found"] = "Không tìm thấy bản ghi ... nếu bản ghi đó được nhập từ bên ngoài, hãy thử chỉ định chủ sở hữu từ khu vực quản trị.";
	$Translation["invalid username"] = "Tên sử dụng không hợp lệ";
	$Translation["record not found error"] = "Lỗi: Không tìm thấy bản ghi!";
	$Translation["edit Record Ownership"] = "Chỉnh sửa Quyền sở hữu Bản ghi";
	$Translation["owner group"] = "Nhóm chủ sở hữu";
	$Translation["view all records by group"] = "Xem tất cả các bản ghi của nhóm này";
	$Translation["owner member"] = "Thành viên chủ sở hữu";
	$Translation["view all records by member"] = "Xem tất cả hồ sơ của thành viên này";
	$Translation["switch record ownership"] = "Nếu bạn muốn chuyển quyền sở hữu bản ghi này cho một thành viên của nhóm khác, bạn phải thay đổi nhóm chủ sở hữu và lưu các thay đổi trước.";
	$Translation["record created on"] = "
	Bản ghi được tạo vào";
	$Translation["record modified on"] = "Bản ghi được sửa đổi vào";
	$Translation["view all records of table"] = "Xem tất cả các bản ghi của bảng";
	$Translation["record data"] = "Ghi lại dữ liệu";
	$Translation["print"] = "
	In";
	$Translation["could not retrieve field list"] = "Không thể truy xuất danh sách trường từ '<TABLENAME>'";
	$Translation["field name"] = "Tên trường";
	$Translation["value"] = "
	Giá trị";
	
	//pageHome.php
	$Translation["visitor sign up"] = '<a href="../membership_signup.php" target="_blank"> Đăng ký của khách truy cập </a> bị vô hiệu hóa vì hiện tại không có nhóm nào mà khách truy cập có thể đăng ký. Để cho phép khách truy cập đăng ký, hãy thiết lập ít nhất một nhóm để cho phép khách truy cập đăng ký.';
	$Translation["table data without owner"] = 'Bạn có dữ liệu trong một hoặc nhiều bảng không có chủ sở hữu. Để chỉ định một nhóm chủ sở hữu cho dữ liệu này, hãy <a href="pageAssignOwners.php"> nhấp vào đây </a>.';
	$Translation["membership management homepage"] = "Trang chủ quản lý thành viên";
	$Translation["newest updates"] = "Cập nhật mới nhất
	";
	$Translation["view record details"] = "Xem chi tiết hồ sơ";
	$Translation["newest entries"] = "Mục mới nhất";
	$Translation["available add-ons"] = "Các tiện ích bổ sung có sẵn";
	$Translation["more info"] = "
	Thêm thông tin";
	$Translation["close"] = "Đóng";
	$Translation["view add-ons"] = "Xem tất cả các tiện ích bổ sung";
	$Translation["top members"] = "Top Thành viên ";
	$Translation["edit member details"] = "
	Chỉnh sửa chi tiết thành viên";
	$Translation["view member records"] = "Xem hồ sơ của thành viên";
	$Translation["records"] = "
	Hồ sơ";
	$Translation["members stats"] = "Thống kê thành viên";
	$Translation["total groups"] = "Tổng số nhóm";
	$Translation["active members"] = "Thành viên tích cực";
	$Translation["view active members"] = "Xem các thành viên tích cực";
	$Translation["members awaiting approval"] = "Các thành viên đang chờ phê duyệt";
	$Translation["view members awaiting approval"] = "Xem các thành viên đang chờ phê duyệt";
	$Translation["banned members"] = "Thành viên bị cấm";
	$Translation["view banned members"] = "Xem các thành viên bị cấm";
	$Translation["total members"] = "Tổng số thành viên";
	$Translation["view all members"] = "Xem tất cả thành viên";
	$Translation["BigProf tweets"]  = "Tweets By BigProf Software";
	$Translation["follow BigProf"] = "Follow @bigprof";
	$Translation["loading bigprof feed"] = "Loading @bigprof feed ...";
	$Translation["remove feed"] = "Remove this feed";
	
	//pageMail.php
	$Translation["can not send mail"] = "You can not send emails currently. The configured sender email address is not valid.	Please <a href='pageSettings.php'>correct it first</a> then try again.";
	$Translation["all groups"] = "All groups";
	$Translation["no recipient"] = "Couldn't find recipient. Please make sure you provide a valid recipient.";
	$Translation["invalid subject line"] = "Invalid subject line.";
	$Translation["no recipient found"] = "Couldn't find any recipients. Please make sure you provide a valid recipient.";
	$Translation["mail queue not saved"] = "Couldn't save mail queue. Please make sure the directory '<CURRDIR>' is writeable (chmod 755 or chmod 777).";
	$Translation["send mail"]  = "Send mail message to a member/group";
	$Translation["send mail to all members"] = "You are sending an email to all members. This could take a lot of time and affect your server performance. If you have a huge number of members, we don't recommend sending an email to all of them at once.";
	$Translation["from"] = "From";
	$Translation["change setting"] = "Change this setting";
	$Translation["to"] = "To";
	$Translation["subject"] = "Subject";
	$Translation["message"] = "Message";
	$Translation["send message"] = "Send Message";
	
	//pagePrintRecord.php
	$Translation["record details"] = "Membership Management -- Record details";
	$Translation['table name'] = "Table: <TABLENAME>";
	
	//pageRebuildFields.php
	$Translation['create or update table'] = "An attempt to <ACTION> the field <i><FIELD></i> in <i><TABLE></i> table was made by executing this query: <pre><QUERY></pre> Results are shown below.";

	$Translation['view or rebuild fields'] = "View/Rebuild fields";
	$Translation['show deviations only'] = "Show deviations only";
	$Translation['show all fields'] = "Show all fields";
	$Translation['compare tables page'] = "This page compares the tables and fields structure/schema as designed in AppGini to the actual database structure and allows you to fix any deviations.";
	$Translation['field'] = "Field";
	$Translation['AppGini definition'] = "AppGini definition";
	$Translation['database definition'] = "Current definition in the database";
	$Translation['table name title'] = "<TABLENAME> table";
	$Translation['does not exist'] = "Doesn't exist!";
	$Translation['create field'] = "Create the field by running an ADD COLUMN query.";
	$Translation['create it'] = "Create it";
	$Translation['fix field'] = "Fix the field by running an ALTER COLUMN query so that its definition becomes the same as that in AppGini.";
	$Translation['fix it'] = "Fix it";
	$Translation['field update warning'] = "DANGER!! In some cases, this might lead to data loss, truncation, or corruption. It might be a better idea sometimes to update the field in AppGini to match that in the database. Would you still like to continue?";
	$Translation['no deviations found'] = "No deviations found. All fields OK!";
	$Translation['error fields'] = "Found <CREATENUM> non-existing fields that need to be created.<br>Found <UPDATENUM> deviating fields that might need to be updated.";
	
	//pageRebuildThumbnails.php
	$Translation['rebuild thumbnails'] = "Rebuild thumbnails";
	$Translation['thumbnails utility'] = "Use this utility if you have one or more image fields in a table that don't have thumbnails or have thumbnails with incorrect dimensions.";
	$Translation['rebuild thumbnails of table'] = "Rebuild thumbnails of table";
	$Translation['rebuild'] = "Rebuild";
	$Translation['rebuild thumbnails of table_name'] = "Rebuilding thumbnails of '<i><TABLENAME></i>' table ...";
	$Translation['do not close page message'] = "Don't close this page until you see a confirmation message that all thumbnails have been built.";	
	$Translation['rebuild thumbnails status'] = "Status: still rebuilding thumbnails, please wait ...";
	$Translation['building field thumbnails'] =  "Building thumbnails for '<i><FIELD></i>' field...";
	$Translation['done'] = "Done.";
	$Translation['finished status'] = "Status: finished. You can close this page now.";
	
	//pageSender.php
	$Translation['invalid mail queue'] = "Invalid mail queue.";
	$Translation['sending message failed'] = " -- Sending message to '<EMAIL>': Failed.";
	$Translation['sending message ok'] = " -- Sending message to '<EMAIL>': Ok.";
	$Translation['done!'] = "Done!";
	$Translation['close page'] = "You may close this page now or browse to some other page.";
	$Translation['mail log'] = "Mail log:";
	
	//pageSettings.php
	$Translation['invalid security token'] = 'Mã thông báo bảo mật không hợp lệ! Vui lòng <a href="pageSettings.php"> tải lại trang </a> và thử lại.';
	$Translation['unique admin username error'] = "Tên người dùng quản trị mới đã được sử dụng bởi một thành viên khác. Hãy đảm bảo rằng tên người dùng quản trị mới là duy nhất.";	
	$Translation['unique anonymous username error'] = 'Tên người dùng ẩn danh mới đã được sử dụng bởi một thành viên khác. Hãy đảm bảo rằng tên người dùng được cung cấp là duy nhất.';
	$Translation['unique anonymous group name error'] = 'Tên nhóm ẩn danh mới đã được một nhóm khác sử dụng. Hãy đảm bảo rằng tên nhóm được cung cấp là duy nhất.';
	$Translation['admin password mismatch'] = '"Mật Khẩu " Và "Xác Nhận Mật Khẩu" Không Khớp';
	$Translation['invalid sender email'] = '"Email người gửi" không hợp lệ. ';
	$Translation['errors occurred'] = "Các lỗi sau đây xảy ra:";
	$Translation['go back'] = 'Vui lòng <a href="pageSettings.php" onclick="history.go(-1); return false;"> quay lại </a> để sửa (các) lỗi ở trên và thử lại.';
	$Translation['record updated automatically'] = "Bản ghi được cập nhật tự động vào <DATE>";
	$Translation['admin settings saved'] = "Đã lưu thành công cài đặt quản trị viên. <br> Quay lại <a href=\"pageSettings.php\"> Cài đặt quản trị viên </a>.";
	$Translation['admin settings not saved'] = "Cài đặt quản trị KHÔNG được lưu thành công. Lý do không thành công: <ERROR> <br> Quay lại <a href=\"pageSettings.php\" onclick=\"history.go(-1); return false;\"> Cài đặt quản trị </a>. ";
	$Translation['show tool tips'] = 'Hiển thị các mẹo công cụ khi di chuột qua các tùy chọn';
	$Translation['admin username'] = "Admin tài Khoản";
	$Translation['admin password'] = "Admin Mật Khẩu";
	$Translation['change admin password'] = "Chỉ nhập mật khẩu nếu bạn muốn thay đổi mật khẩu quản trị.";
	$Translation['sender email'] = "Người gửi email";
	$Translation['sender name and email'] = "Tên người gửi và email được sử dụng ";
	$Translation['email messages'] = "thông báo email cho các nhóm hoặc thành viên.";
	$Translation['admin notifications'] = "Thông báo của quản trị viên";
	$Translation['no email notifications'] = "Không có thông báo email cho quản trị viên.";
	$Translation['member waiting approval'] = "Chỉ thông báo cho quản trị viên khi thành viên mới đang chờ phê duyệt.";
	$Translation['new sign-ups'] = "Thông báo cho quản trị viên về tất cả các lần đăng ký mới.";
	$Translation['sender name'] = "Tên người gửi";
	$Translation['members custom field 1'] = "Trường tùy chỉnh thành viên 1";
	$Translation['members custom field 2'] = "Trường tùy chỉnh thành viên 2";
	$Translation['members custom field 3'] = "Trường tùy chỉnh thành viên 3";
	$Translation['members custom field 4'] = "Trường tùy chỉnh thành viên 4";
	$Translation['member approval email subject'] = "Chủ Đề email";
	$Translation['member approval email subject control'] = "Khi quản trị viên phê duyệt thành viên, thành viên sẽ được <br> thông báo qua email rằng bạn đã được chấp thuận. Bạn có thể kiểm soát chủ đề của <br> email phê duyệt trong hộp này và nội dung trong hộp bên dưới.";
	$Translation['member approval email message'] = "Phê duyệt thành viên <br> thông báo email";
	$Translation['MySQL date'] = "MySQL Ngày <br> chuỗi định dạng";
	$Translation['MySQL reference'] = 'Vui lòng tham khảo <a href="http://dev.mysql.com/doc/refman/5.0/en/date-and-time-functions.html# Chức năng_date-format" target="_blank"> tài liệu tham khảo MySQL </a> cho các định dạng có thể.';
	$Translation['PHP short date'] = "PHP Ngày Ngắn<br> chuỗi định dạng";
	$Translation['PHP manual'] = 'Vui lòng tham khảo <a href="http://www.php.net/manual/en/ Chức năng.date.php" target="_blank"> hướng dẫn sử dụng PHP </a> để biết các định dạng có thể có.'; 
	$Translation['PHP long date'] = "Chuỗi định dạng ngày dài <br> trong PHP";
	$Translation['groups per page'] = "Các nhóm trên mỗi trang";
	$Translation['members per page'] = "Thành viên trên mỗi trang";
	$Translation['records per page'] = "Tài liệu từng trang";
	$Translation['default sign-up mode'] = "Chế độ đăng ký mặc định <br> cho các nhóm mới";
	$Translation['no sign-up allowed'] = "Không được phép đăng ký. Chỉ quản trị viên mới có thể thêm thành viên.";
	$Translation['admin approve members'] = "Cho phép đăng ký, nhưng quản trị viên phải phê duyệt thành viên.";
	$Translation['automatically approve members'] = "Cho phép đăng ký và tự động phê duyệt thành viên.";
	$Translation['anonymous group'] = "Tên của
	nhóm ẩn danh";
	$Translation['anonymous user name'] = "Tên của
	người dùng ẩn danh";
	$Translation['hide twitter feed'] = "Ẩn nguồn cấp dữ liệu Twitter trong trang chủ quản trị?";
	$Translation['twitter feed'] = "Nguồn cấp dữ liệu Twitter của chúng tôi giúp bạn cập nhật tin tức mới nhất, tài nguyên hữu ích, bản phát hành mới và nhiều mẹo hữu ích khác.";
	
	//pageTransferOwnership.php
	$Translation['invalid source member'] = "Invalid source member selected.";
	$Translation['invalid destination member'] = "Invalid destination member selected.";
	$Translation['moving member'] = "Moving member '<MEMBERID>' and his data from group '<SOURCEGROUP>' to group '<DESTINATIONGROUP>' ...";
	$Translation['data records transferred'] = "Member '<MEMBERID>' now belongs to group '<NEWGROUP>'. Data records transferred: <DATARECORDS>.";
	$Translation['moving data'] = "Moving data of member '<SOURCEMEMBER>' from group '<SOURCEGROUP>' to member '<DESTINATIONMEMBER>' from group '<DESTINATIONGROUP>' ...";
	$Translation['member records status'] = "Member '<SOURCEMEMBER>' of group '<SOURCEGROUP>' had <DATABEFORE> data records. <TRANSFERSTATUS> to member '<DESTINATIONMEMBER>' of group '<DESTINATIONGROUP>'.";
	$Translation['moving all group members'] = "Moving all members and data of group '<SOURCEGROUP>' to group '<DESTINATIONGROUP>' ...";
	$Translation['failed transferring group members'] = "Operation failed. No members were transferred from group '<SOURCEGROUP>' to '<DESTINATIONGROUP>'.";
	$Translation['group members transferred'] = "All members of group '<SOURCEGROUP>' now belong to '<DESTINATIONGROUP>'. ";
	$Translation['failed transfer data records'] = "However, data records failed to transfer.";
	$Translation['data records were transferred'] = "<DATABEFORE> data records were transferred.";
	$Translation['moving group data to member'] = "Moving data of all members of group '<SOURCEGROUP>' to member '<DESTINATIONMEMBER>' from group '<DESTINATIONGROUP>' ...";
	$Translation['moving group data to member status'] = "<NUMBER> record(s) were transferred from group '<SOURCEGROUP>' to member '<DESTINATIONMEMBER>' of group '<DESTINATIONGROUP>'";
	$Translation['status'] = "STATUS:";
	$Translation['batch transfer link'] = 'To repeat the same batch transfer again later you can <a href= "pageTransferOwnership.php?sourceGroupID=<SOURCEGROUP>&amp;sourceMemberID=<SOURCEMEMBER>&amp;destinationGroupID=<DESTINATIONGROUP>&amp;destinationMemberID=<DESTINATIONMEMBER>&amp;moveMembers=<MOVEMEMBERS>">bookmark or copy this link</a>.';
	$Translation['ownership batch transfer'] = "Batch Transfer Of Ownership";
	$Translation['step 1'] = "STEP 1:";
	$Translation['batch transfer wizard'] = "The batch transfer wizard allows you to transfer data records of one or all members of a group (the <i>source group</i>) to a member of another group (the <i>destination member</i> of the <i>destination group</i>)";
	$Translation['source group'] = "Source group";
	$Translation['update'] = "Update";
	$Translation['next step'] = "Next Step";
	$Translation['group statistics'] = "This group has <MEMBERS> members, and <RECORDS> data records.";
	$Translation['step 2'] = "STEP 2:";
	$Translation['source member message'] = "The source member could be one member or all members of the source group.";
	$Translation['source member'] = "Source member";
	$Translation['all group members'] = "All members of '<GROUPNAME>'";
	$Translation['member statistics'] = "This member has <RECORDS> data records.";
	$Translation['step 3'] = "STEP 3:";
	$Translation['destination group message'] = "The destination group could be the same or different from the source group. Only groups that have members are listed below.";
	$Translation['destination group'] = "Destination group";
	$Translation['step 4'] = "STEP 4:";
	$Translation['destination member message'] = "The destination member will be the new owner of the data records of the source	member.";
	$Translation['destination member'] = "Destination member";
	$Translation['begin transfer'] = "Begin Transfer";	
	$Translation['move records'] = "You could either move records from the source member(s) to a member in the destination group, or move the source member(s), together with their data records to the destination group.";
	$Translation['move data records to member'] = "Move data records to this member:";
	$Translation['move source member to group'] = "Move source member(s) and all his/their data records to the '<GROUPNAME>' group.";
	
	//pageUploadCSV.php
	$Translation['file not found error'] = "Error: File '<FILENAME>' not found.";
	$Translation['preview and confirm CSV data'] = "Preview the CSV data then confirm to import it ...";
	$Translation['display csv file rows'] = "Displaying the first 10 rows of the CSV file ...";
	$Translation['change CSV settings'] = 'Change CSV settings';
	$Translation['import CSV data'] = 'Confirm and import CSV data &gt;';
	$Translation['apply CSV settings'] = 'Apply CSV Settings';
	$Translation['importing CSV data'] = 'Importing CSV data ...';
	$Translation['start at estimated record'] = "Starting at record <RECORDNUMBER> of <RECORDS> total estimated records ...";
	$Translation['table backed up'] = "Table '<TABLE>' backed up as '<TABLENAME>'.";
	$Translation['table backup not done'] = "Table '<TABLE>' is empty, so no backup was done.";
	$Translation['importing batch'] = 'Importing batch <BATCH> of <BATCHNUM>: ';
	$Translation['ok'] = 'Ok';
	$Translation['records inserted or updated successfully'] = "<RECORDS> records inserted/updated in <SECONDS> seconds.";
	$Translation['mission accomplished'] = "Mission accomplished!";
	$Translation['assign a records owner'] = "Assign an owner to the imported records &gt;";
	$Translation['please wait and do not close'] = "Please wait and don't close this page ...";
	$Translation['hide advanced options'] = "Hide advanced options";
	$Translation['show advanced options'] = "Show advanced options";
	$Translation['import CSV to database'] = "Import a CSV file to the database";
	$Translation['import CSV to database page'] = "This page allows you to upload a CSV file (for example, one generated from MS Excel) and import it to one of the tables of the database. This makes it so easy to bulk-populate the database with data from other sources rather than manually entering every single record.";
	$Translation['populate table from CSV'] = "This is the table that you want to populate with data from the CSV file.";
	$Translation['CSV file'] = "CSV file";
	$Translation['preview CSV data'] = "Preview CSV data &gt;";
	$Translation['no table name provided'] = "No table name provided.";
	$Translation['can not open CSV'] = "Can't open csv file '<FILENAME>'.";
	$Translation['empty CSV file'] = "The csv file '<FILENAME>' is empty.";		
	$Translation['no CSV file data'] = "The csv file '<FILENAME>' has no data to read." ;
	$Translation['field separator'] = "Field separator";
	$Translation['default comma'] = "The default is comma (,)";
	$Translation['field delimiter'] = "Field delimiter";
	$Translation['default double-quote'] = 'The default is double-quote (")';
	$Translation['maximum characters per line'] = "Maximum characters per line";
	$Translation['trouble importing CSV'] = "If you have trouble importing the CSV file, try increasing this value.";
	$Translation['ignore lines number'] = "Number of lines to ignore";
	$Translation['skip lines number'] = "Change this value if you want to skip a specific number of lines in the CSV file.";
	$Translation['first line field names'] = "The first line of the file contains field names";
	$Translation['field names must match'] = "Field names must <b>exactly</b> match those in the database.";
	$Translation['update table records'] = "Update table records if their primary key values match those in the CSV file.";
	$Translation['ignore CSV table records'] = "If not checked, records in the CSV file having the same primary key values as those in the table <b>will be ignored</b>";
	$Translation['back up the table'] = "Back up the table before importing CSV data into it.";
	
	//pageViewGroups.php
	$Translation['no matching results found'] = "No matching results found.";
	$Translation['search groups'] = "Search groups";
	$Translation['find'] = "Find";
	$Translation['reset'] = "Reset";
	$Translation['members count'] = "Members count";
	$Translation['Edit group'] = "Edit group";
	$Translation['confirm delete group'] = "Are you sure you want to completely delete this group?";
	$Translation['delete group'] = "Delete group";
	$Translation['view group records'] = "View group records";
	$Translation['view group members'] = "View group members";
	$Translation['send message to group'] = "Send message to group";
	$Translation['previous'] = "Previous";
	$Translation['displaying groups'] = "Displaying groups <GROUPNUM1> to <GROUPNUM2> of <GROUPS>";
	$Translation['next'] = "Next";
	$Translation['key'] = "Key:";	
	$Translation['edit group details'] = "Edit group details and permissions.";
	$Translation['add member to group'] = "Add a new member to group.";
	$Translation['view data records'] = "View all data records entered by the group's members.";
	$Translation['list group members'] = "List all members of a group.";
	$Translation['send email to all members'] = "Send an email message to all members of a group.";
	
	//pageViewMembers.php
	$Translation['search members'] = "Tìm kiếm thành viên <SEARCH> trong <HTMLSELECT>";
	$Translation['all fields'] = "Tất cả các lĩnh vực";
	$Translation['any'] = "Any";
	$Translation['waiting approval'] = "Waiting approval";
	$Translation['active'] = "
	Hoạt động";
	$Translation['Banned'] = "
	Bị cấm";
	$Translation['username'] = "
	tên tài khoản";
	$Translation['sign up date'] = "
	Ngày đăng ký ";
	$Translation['Status'] = "Trạng thái";
	$Translation['Edit member'] = "
	Chỉnh sửa thành viên";	
	$Translation['sure delete user'] = "Bạn có chắc chắn muốn xóa người dùng \ '<USERNAME> \' không?";
	$Translation['delete member'] = "
	Xóa thành viên";
	$Translation["approve this member"] = "Phê duyệt thành viên này";
	$Translation["unban this member"] = "Bỏ cấm thành viên này";
	$Translation["ban this member"] = "Cấm thành viên này";
	$Translation["View member records"] = "Xem hồ sơ của thành viên
	";
	$Translation["send message to member"] = "Gửi tin nhắn cho thành viên";
	$Translation['displaying members'] = "Hiển thị các thành viên <MEMBERNUM1> đến <MEMBERNUM2> trong tổng số <MEMBERS>";
	$Translation['activate member'] = "Kích hoạt thành viên mới / bị cấm.";
	$Translation['ban member'] = "
	Cấm (đình chỉ) thành viên.";
	$Translation['view entered member records'] = "
	Xem tất cả các bản ghi dữ liệu được nhập bởi thành viên.";
	$Translation['send email to member'] = "Gửi tin nhắn email cho thành viên.";
	
	//pageViewRecords.php
	$Translation['data records'] = "Data Records";
	$Translation['show records'] = "Show records from";
	$Translation['all tables'] = "All tables";
	$Translation['sort records'] = "Sort records by";
	$Translation['date created'] = "Date created";
	$Translation['date modified'] = "Date modified";
	$Translation['newer first'] = "Newer first";
	$Translation['older first'] = "Older first";
	$Translation['created'] = "Created";
	$Translation['modified'] = "Modified";
	$Translation['data'] = "Data";
	$Translation['change record ownership'] = "Change ownership of this record";
	$Translation['sure delete record'] = "Are you sure you want to delete this record?";
	$Translation['delete record'] = "Delete this record";
	$Translation['displaying records'] = "Displaying records <RECORDNUM1> to <RECORDNUM2> of <RECORDS>";

	/* Added in AppGini 5.51 */
	$Translation['maintenance mode admin notification'] = 'Maintenance mode is enabled! You can disable it from the admin home page.';
	$Translation['maintenance mode message'] = 'Tin nhắn Bảo Trì';
	$Translation['maintenance mode'] = 'Maintenance mode';
	$Translation['OFF'] = 'Tắt';
	$Translation['ON'] = 'Bật';
	$Translation['enable maintenance mode?'] = 'Are you sure you want to enable maintenance mode? Only admin users can access the site in this mode!';
	$Translation['disable maintenance mode?'] = 'Are you sure you want to disable maintenance mode? All users will be able to access the site!';
	
	/* Added in AppGini 5.60 */
	$Translation['csv file upload error'] = 'An error occured while processing the requested CSV file.';
	$Translation['back and retry'] = 'Go back and retry';
	$Translation['upload or choose csv file'] = 'Upload a CSV file or open an existing one';
	$Translation['choose csv upload'] = 'Choose a CSV file to upload';
	$Translation['no file chosen yet'] = 'No file chosen yet';
	$Translation['start upload'] = 'Start upload';
	$Translation['select a table'] = 'Select a table';
	$Translation['error reading csv data'] = 'An error occured while reading CSV data. Try resetting/adjusting the CSV settings.';
	$Translation['belongs to'] = 'Belongs to';
	$Translation['skip column'] = 'Skip this column';
	$Translation['connection failed retrying'] = 'Connection failed. Retrying in <SECONDS> seconds ...';
	$Translation['connection failed timeout'] = 'Connection timed out. Retry later.';
	$Translation['sure delete csv'] = 'Are you sure you want to delete the CSV file [CSVFILE] from the server?';
	$Translation['invalid csv file selected'] = 'Invalid file chosen. Must be a CSV file.';
	$Translation['couldnt delete csv file'] = 'Couldn\'t delete this CSV file.';
	$Translation['error backing up table'] = 'Error: Couldn\'t back up table <TABLE>.';
	$Translation['no columns selected'] = 'Please select at least one column to import and make sure each selected column belongs to a UNIQUE field.';
	$Translation['csrf token expired or invalid'] = 'Oops! Something went wrong with this page. Please go back and retry.';
	$Translation['back to groups'] = 'Back to groups';
	$Translation['member updated'] = "Member <USERNAME> updated successfully";
	$Translation['fix errors before submitting'] = 'Please fix the highlighted errors before submitting the page!';

	/* Added in AppGini 5.62 */
	$Translation['mail_function'] = 'Method of sending emails';
	$Translation['smtp_server'] = 'SMTP server';
	$Translation['smtp_encryption'] = 'SMTP encryption';
	$Translation['smtp_port'] = 'SMTP port';
	$Translation['smtp_port_hint'] = 'Typical values are 25 (for non-encrypted SMTP), 465 (used in many cases with SSL encryption) or 587 (typical with TLS encryption)';
	$Translation['smtp_user'] = 'SMTP username';
	$Translation['smtp_pass'] = 'SMTP password';
	$Translation['configure mail settings'] = 'Configure mail settings';
	$Translation['display debugging info'] = 'Display debugging info';
	$Translation['debugging info hint'] = 'Debugging info is useful if you are having trouble sending emails through the configured SMTP server';

	/* Added in AppGini 5.70 */
	$Translation['create backup file'] = 'Create Backup File';
	$Translation['database backups'] = 'Database backups';
	$Translation['no backups found'] = 'No backups found. You can create a new backup by clicking the "Create Backup File" button.';
	$Translation['available backups'] = 'Available backups';
	$Translation['restore backup'] = 'Restore';
	$Translation['delete backup'] = 'Delete';
	$Translation['backup restored'] = 'Backup restored successfully.';
	$Translation['backup deleted'] = 'Backup deleted successfully.';
	$Translation['restore error'] = 'An error occured while restoring backup.';
	$Translation['backup delete error'] = 'An error occured while deleting backup.';
	$Translation['confirm delete backup'] = 'Are you sure you want to delete this backup file?';
	$Translation['confirm restore'] = 'Restoring your database from a backup file would OVERWRITE all existing data AND users/passwords, reverting all to the state when the backup was taken.\n\nDuring the restore process, maintenance mode will be enabled to prevent users from modifying the database, and will be disabled once the restore is finished.\n\nAre you sure you want to continue?';
	$Translation['confirm backup'] = 'During the backup process, maintenance mode will be enabled to prevent users from modifying the database, and will be disabled once the backup is finished.\n\nAre you sure you want to continue?';
	$Translation['cant create backup folder'] = 'Error: Can\'t create or write to admin/backups folder. Please check your folder permissions and ownership or contact your server administrator for help.';
	$Translation['fix all'] = 'FIX ALL FIELDS';
	$Translation['backup before fix'] = 'It\'s highly recommended that you create a database backup first before attempting to make any fixes here.';
