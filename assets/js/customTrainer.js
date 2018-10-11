var STATE_LIST = ["Andhra Pradesh","Arunachal Pradesh","Assam","Bihar","Chhattisgarh","Chandigarh","Dadra and Nagar Haveli","Daman and Diu","Delhi",
"Goa","Gujarat","Haryana","Himachal Pradesh","Jammu and Kashmir","Jharkhand","Karnataka","Kerala","Madhya Pradesh","Maharashtra","Manipur",
"Meghalaya","Mizoram","Nagaland","Orissa","Punjab","Pondicherry","Rajasthan","Sikkim","Tamil Nadu","Tripura","Uttar Pradesh","Uttarakhand","West Bengal"];
$(document).ready(function () {
  //trailer form submission
  $("form[name='trainerForm']").on('submit', function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
      type: 'post',
      url: 'backend/trainerOperation.php',
      processData: false,
      contentType: false,
      data: formData,
      success: function (data) {
        console.log('data',data);
        if(data > 0) {
          alert('Trainer enrolled successfully');
          window.location.href="trainerProfile.php?trainerId="+data;
        }
      }
    });
  });

  $("form[name='clientForm']").on('submit', function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
      type: 'post',
      url: 'backend/clientOperation.php',
      processData: false,
      contentType: false,
      data: formData,
      success: function (data) {
        if(data > 0) {
          alert('Client enrolled successfully');
          window.location.href="clientProfile.php?clientId="+data;
        }
      }
    });
  });


  $("#trainerParentCategory").change(function(){
    var selectedCategory = $(this).val();
    $("#subCategory").html('');
    if(selectedCategory == 'Corporate Trainer' || selectedCategory == 'Professional Institute Trainer') {
      $("#subCategory").append('<option value="">Select Sub Category</option>');
      $("#subCategory").append('<option value="Full Time">Full Time</option>');
      $("#subCategory").append('<option value="Freelancer">Freelancer</option>');
    } else if(selectedCategory == 'School Teacher/Tutor') {
      $("#subCategory").append('<option value="">Select Sub Category</option>');
      $("#subCategory").append('<option value="Personal Coaching - Home Visit - Own Class/ Residence">Personal Coaching - Home Visit - Own Class/ Residence</option>');
      $("#subCategory").append('<option value="Group Coaching - Home Visit - Own Class/ Residence">Group Coaching-Home Visit - Own Class/ Residence</option>');
    } else if(selectedCategory == 'College Professor') {
      $("#subCategory").append('<option value="">Select Sub Category</option>');
      $("#subCategory").append('<option value="Full Time">Full Time</option>');
      $("#subCategory").append('<option value="Visiting Faculty">Visiting Faculty</option>');
    } else {
      $("#subCategory").append('<option value="">Select Sub Category</option>');
      $("#subCategory").append('<option value="Training Enterpreneur">Training Enterpreneur</option>');
    }
  });

  STATE_LIST.forEach(function(state){
    $("#state").append("<option value="+ state +">"+ state.toUpperCase() +"</option>");
  });  
  $("#selectSoftSkillsText").css('display', 'none');
  $("#selectSoftSkillsText").css('margin-top', '10px');
  $("#selectOrgWorkedWithText").css('display', 'none');
  $("#selectOrgWorkedWithText").css('margin-top', '10px');
  $("#logout,#signout").click(function (event) {
    $.post("backend/logoutOperation.php", {}, function (data) {
      window.location.href = "index.php";
    });
  });
  loadAllSoftSkills();
  loadAllOrgWorkedWithList();
  $("#selectSoftSkills").change(function () {
    if ($(this).val() == 'Other') {
      $("#selectSoftSkillsText").show(1000);
    } else {
      $("#selectSoftSkillsText").hide(1000);
    }
  });
  $("#selectSoftSkillsText").blur(function () {
    addSkill('softskills',$(this).val());
  });

  $("#selectOrgWorkedWith").change(function () {
    if ($(this).val() == 'Other') {
      $("#selectOrgWorkedWithText").show(1000);
    } else {
      $("#selectOrgWorkedWithText").hide(1000);
    }
  });
  $("#selectOrgWorkedWithText").blur(function () {
    addOrgWorkedWith('orgWorkedWith',$(this).val());
  });
});

function addOrgWorkedWith(orgWorkedWithId, orgWorkedWithName) {
  $.post("backend/allProducts.php", {
    flag: "addOrgWorkedWith",
    orgWorkedWithId: orgWorkedWithId,
    orgWorkedWithName: orgWorkedWithName
  }, function (data) {
    console.log(data);
  });
}

function addSkill(skillId, skillName) {
  $.post("backend/allProducts.php", {
    flag: "addSkill",
    skillId: skillId,
    skillName: skillName
  }, function (data) {
    console.log(data);
  });
}

function changeSubCategory(val) {
  alert(val);
}

function loadAllSoftSkills() {
  $.post("backend/allProducts.php", {
    flag: "loadAllSoftSkills",
    id: "softskills"
  }, function (data) {
    console.log('softskills list', data);
    data.forEach(option => {
      var element = '<option value=' + option.skillname + '>' + option.skillname + '</option>';
      $("#selectSoftSkills").append(element);
    });
    var element = '<option value="Other">Other</option>';
    $("#selectSoftSkills").append(element);
  })
}

function loadAllOrgWorkedWithList() {
  $.post("backend/allProducts.php", {
    flag: "loadAllOrgWorkedWith",
    id: "orgWorkedWith"
  }, function (data) {
    console.log('OrgWorkedWith list', data);
    data.forEach(option => {
      var element = '<option value=' + option.orgworkedwithname + '>' + option.orgworkedwithname + '</option>';
      $("#selectOrgWorkedWith").append(element);
    });
    var element = '<option value="Other">Other</option>';
    $("#selectOrgWorkedWith").append(element);
  })
}

function isNumberKey(evt) {
  var charCode = evt.which ? evt.which : evt.keyCode;
  if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57))
    return false;
  return true;
}

function isNumericKey(evt) {
  var charCode = evt.which ? evt.which : evt.keyCode;
  if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57))
    return true;
  return false;
}