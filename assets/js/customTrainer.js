var STATE_LIST = ["Andhra Pradesh","Arunachal Pradesh","Assam","Bihar","Chhattisgarh","Chandigarh","Dadra and Nagar Haveli","Daman and Diu","Delhi",
"Goa","Gujarat","Haryana","Himachal Pradesh","Jammu and Kashmir","Jharkhand","Karnataka","Kerala","Madhya Pradesh","Maharashtra","Manipur",
"Meghalaya","Mizoram","Nagaland","Orissa","Punjab","Pondicherry","Rajasthan","Sikkim","Tamil Nadu","Tripura","Uttar Pradesh","Uttarakhand","West Bengal"];
var orgWorkedWithList = [];

$(document).ready(function () {
  $("#addAllOrgWorkedWithList").click(function(event) {
    event.preventDefault();
    orgWorkedWithList = [];
    for(var i=1;i<=5;i++) {
      var orgWorkedWithObject = {};
      orgWorkedWithObject.orgName = $("#orgName"+i).val();
      orgWorkedWithObject.trainingName = $("#trainingName"+i).val();
      orgWorkedWithObject.topicsCovered = $("#topicsCovered"+i).val();
      orgWorkedWithObject.duration = $("#duration"+i).val();
      orgWorkedWithObject.monthyear = $("#monthyear"+i).val();
      orgWorkedWithList.push(orgWorkedWithObject);
    }
  })
  //trailer form submission
  $("form[name='trainerForm']").on('submit', function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    formData.append('orgWorkedWithList',JSON.stringify(orgWorkedWithList));
    $.ajax({
      type: 'post',
      url: 'backend/trainerOperation.php',
      processData: false,
      contentType: false,
      data: formData,
      success: function (data) {
        console.log('data',data);
        if(data > 0) {
          toast('Trainer enrolled successfully');
          setTimeout(function() {
            window.location.href="trainerProfile.php?trainerId="+data;
          }, 3000);          
        }
      }
    });
  });

  //trailer form submission
  $("form[name='PostJobForm']").on('submit', function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    //formData.append('orgWorkedWithList',JSON.stringify(orgWorkedWithList));
    $.ajax({
      type: 'post',
      url: 'backend/postJobOperation.php',
      processData: false,
      contentType: false,
      data: formData,
      success: function (data) {
        console.log('data',data);
        if(data > 0) {
          toast('Job posted successfully');
          setTimeout(function(){
            window.location.href="index.php";
          },3000);
          
        }
      }
    });
  });  

  $("form[name='login']").on('submit', function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
      type: 'post',
      url: 'backend/loginOperation.php',
      processData: false,
      contentType: false,
      data: formData,
      success: function (data) {
        console.log(data);
        if(data == 'failed') {
          toast('Login Failed');
        } else {
          window.location.href = data;
        }
      }
    });
  });

  $("form[name='editTrainerForm']").on('submit', function (e) {
    e.preventDefault();
    if(orgWorkedWithList.length == 0) {
        $("#orgName1").focus();
        return false;
    }
    var formData = new FormData(this);
    formData.append('orgWorkedWithList',JSON.stringify(orgWorkedWithList));
    $.ajax({
      type: 'post',
      url: 'backend/editTrainerOperation.php',
      processData: false,
      contentType: false,
      data: formData,
      success: function (data) {
        console.log('data',data);
        if(data > 0) {
          toast('Trainer profile updated');
          setTimeout(function() {
            window.location.href="trainerProfile.php?trainerId="+data;
          }, 3000);
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
        console.log(data);
        if(data > 0) {
          toast('Client enrolled successfully');
          setTimeout(function(){
            window.location.href="clientProfile.php?clientId="+data;
          },3000);
          
        }
      }
    });
  });

  $("form[name='editclientForm']").on('submit', function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
      type: 'post',
      url: 'backend/editClientOperation.php',
      processData: false,
      contentType: false,
      data: formData,
      success: function (data) {
        if(data > 0) {
          toast('Client Profile Updated Successfully');
          setTimeout(function() {
            window.location.href="clientProfile.php?clientId="+data;  
          }, 3000);          
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
      $("#subCategory").append('<option value="Personal Coaching - Home Visit">Personal Coaching - Home Visit</option>');
      $("#subCategory").append('<option value="Personal Coaching - Own Class / Residence">Personal Coaching - Own Class / Residence</option>');
      $("#subCategory").append('<option value="Group Coaching - Home Visit">Group Coaching - Home Visit</option>');
      $("#subCategory").append('<option value="Group Coaching - Own Class / Residence">Group Coaching - Own Class / Residence</option>');
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
  $("#selectTechnicalSkillsText").css('display', 'none');
  $("#selectTechnicalSkillsText").css('margin-top', '10px');
  
  $("#logout,#signout").click(function (event) {
    $.post("backend/logoutOperation.php", {}, function (data) {
      window.location.href = "index.php";
    });
  });

  loadAllSoftSkills();
  loadAllTechnicalSkilss();
  
  $("#selectSoftSkills").change(function () {
    if ($(this).val() == 'Other') {
      $("#selectSoftSkillsText").show(1000);
    } else {
      $("#selectSoftSkillsText").hide(1000);
    }
  });

  $("#selectSoftSkillsText").blur(function () {
    if ($(this).val() != null && $(this).val() != '') {
      addSkill('softskills',$(this).val());
    }
  });

  $("#technicalSkills").change(function () {
    if ($(this).val() == 'Other') {
      $("#selectTechnicalSkillsText").show(1000);
    } else {
      $("#selectTechnicalSkillsText").hide(1000);
    }
  });

  $("#selectTechnicalSkillsText").blur(function () {
    if ($(this).val() != null && $(this).val() != '') {
      addTechnicalSkills('technicalSkills',$(this).val());
    }
  });

});

function addTechnicalSkills(technicalSkillsId, technicalSkillsName) {
  $.post("backend/allProducts.php", {
    flag: "addTechnicalSkills",
    technicalSkillsId: technicalSkillsId,
    technicalSkillsName: technicalSkillsName
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
    $("#selectSoftSkills").append('<option value="Other">Other</option>');
  })
}

function loadAllTechnicalSkilss() {
  $.post("backend/allProducts.php", {
    flag: "loadAllOrgWorkedWith",
    id: "technicalSkills"
  }, function (data) {
    console.log('OrgWorkedWith list', data);
    data.forEach(option => {
      if(option.orgworkedwithname) {
        var element = '<option value=' + option.orgworkedwithname + '>' + option.orgworkedwithname + '</option>';
        $("#technicalSkills").append(element);
      }
    });
    var element = '<option value="Other">Other</option>';
    $("#technicalSkills").append(element);
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
