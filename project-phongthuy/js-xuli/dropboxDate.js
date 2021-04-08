$(document).ready(function () {
    var demo = [];
    var demo1 = [];

    $("input.dob").click(function () {
      var check = $("div.input-dropdown").hasClass("input-dropdown");
      if (check) {
        $("div.input-dropdown").show();
        $("button.btn2").hide();
      } else {
        $("div.input-dropdown").hide();

        $("div.input-dropdown").addClass("showbox");
      }
    });
    $("input.ngayxem").click(function () {
      var check = $("div.input-dropdown").hasClass("input-dropdown");
      if (check) {
        $("div.input-dropdown").show();
        $("button.btn1").hide();
      } else {
        $("div.input-dropdown").hide();
        $("div.input-dropdown").addClass("showbox");
      }
    });

    $("button.btn1").click(function () {
      check = 1;
      var checkbutton = $("#day option:selected").text();
      var checkbutton1 = $("#month option:selected").text();
      var checkbutton2 = $("#year option:selected").text();
      demo = [checkbutton, checkbutton1, checkbutton2].join("-");
      if (checkbutton == "Ngày") {
        check = 0;
        alert("Vui lòng nhập đúng định dạng ngày/tháng/năm");
      } else if (checkbutton1 == "Tháng") {
        check = 0;
      } else if (checkbutton2 == "Năm") {
        check = 0;
      }
      if (check == 1) {
        $("input.dob").attr("value", demo);
        $("button.btn2").show();
        $("div.input-dropdown").hide();
      }
    });
    $("button.btn2").click(function () {
      check = 1;
      var checkbutton = $("#day option:selected").text();
      var checkbutton1 = $("#month option:selected").text();
      var checkbutton2 = $("#year option:selected").text();
      demo1 = [checkbutton, checkbutton1, checkbutton2].join("-");
      if (checkbutton == "Ngày") {
        check = 0;
        alert("Vui lòng nhập đúng định dạng ngày/tháng/năm");
      } else if (checkbutton1 == "Tháng") {
        check = 0;
      } else if (checkbutton2 == "Năm") {
        check = 0;
      }
      if (check == 1) {
        $("button.btn1").show();
        $("input.ngayxem").attr("value", demo1);
        $("div.input-dropdown").hide();
      }
    });
  });