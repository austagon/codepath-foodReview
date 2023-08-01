<?php

?>

<html>
<head>
  <title>Restaurant Name | Food Review Website</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      margin: 0;
      padding: 0;
    }
    
    #header {
      background-color: #32CD32;
      padding: 20px;
      text-align: center;
    }
    
    h1 {
      margin: 0;
      color: #fff;
    }
    
    #content {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 4px;
      box-shadow: 0 0 6px rgba(0, 0, 0, 0.1);
    }
    
    .restaurant-image {
      max-width: 100%;
      margin-bottom: 20px;
    }
    
    .restaurant-description {
      margin-bottom: 20px;
    }
    
    .review-button {
      display: inline-block;
      padding: 10px 20px;
      background-color: #32CD32;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
      font-size: 16px;
      border: none;
    }
    
    .edit-button,
    .delete-button {
      display: inline-block;
      padding: 5px 10px;
      background-color: #f2f2f2;
      color: #32CD32;
      text-decoration: none;
      border-radius: 4px;
      font-size: 14px;
      border: none;
      margin-left: 10px;
    }
    
    .edit-button:hover,
    .delete-button:hover {
      background-color: #d5f7d5;
    }
    
    #footer {
      background-color: #333;
      color: #fff;
      text-align: center;
      padding: 20px;
    }
  </style>
  <script>
    function showReviewBox() {
      var reviewBox = document.getElementById("reviewBox");
      reviewBox.style.display = "block";
    }

    function submitReview() {
      var reviewBox = document.getElementById("reviewBox");
      var reviewInput = document.getElementById("reviewInput");
      var reviewText = reviewInput.value.trim();

      if (reviewText !== "") {
        var reviewList = document.getElementById("reviewList");
        var reviewItem = document.createElement("div");
        reviewItem.className = "review";
        reviewItem.innerHTML = "<p>" + reviewText + "</p>";
        reviewList.appendChild(reviewItem);
        reviewBox.style.display = "none";
        reviewInput.value = "";
      }
    }
	
	function editReview(reviewItem) {
      var reviewText = reviewItem.querySelector("p").innerText;
      var editBox = document.createElement("div");
      editBox.innerHTML = `
        <textarea id="editInput" cols="50" rows="3">${reviewText}</textarea><br>
        <button onclick="updateReview(this, '${reviewText}')">Update</button>
        <button onclick="cancelEdit(this, '${reviewText}')">Cancel</button>
      `;
      reviewItem.appendChild(editBox);
      reviewItem.querySelector("p").style.display = "none";
    }

    function updateReview(updateBtn, originalReview) {
      var reviewItem = updateBtn.parentElement.parentElement;
      var editedReview = reviewItem.querySelector("#editInput").value.trim();

      if (editedReview !== "") {
        reviewItem.querySelector("p").innerText = editedReview;
        reviewItem.querySelector("p").style.display = "block";
        reviewItem.removeChild(updateBtn.parentElement);
      } else {
        reviewItem.querySelector("p").innerText = originalReview;
        reviewItem.querySelector("p").style.display = "block";
        reviewItem.removeChild(updateBtn.parentElement);
      }
    }

    function cancelEdit(cancelBtn, originalReview) {
      var reviewItem = cancelBtn.parentElement.parentElement;
      reviewItem.querySelector("p").innerText = originalReview;
      reviewItem.querySelector("p").style.display = "block";
      reviewItem.removeChild(cancelBtn.parentElement);
    }

    function deleteReview(deleteBtn) {
      var reviewItem = deleteBtn.parentElement;
      reviewItem.remove();
    }
  </script>
</head>
<body>
  <div id="header">
    <h1>Food Review Website</h1>
  </div>
  
  <div id="content">
    <h2>Restaurant Name</h2>
    <img src="https://assets.simpleviewinc.com/simpleview/image/upload/c_limit,h_1200,q_75,w_1200/v1/clients/saltlake/TheRoofRestaurant_night_51f30007-b12c-4b39-b82b-bbcad89becde.jpg" alt="Restaurant Image" class="restaurant-image">
    <p class="restaurant-description">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam efficitur nisl velit, nec vestibulum magna gravida nec. 
      Proin in vulputate turpis, ac facilisis nisl. Nullam scelerisque orci non ligula pulvinar, eu porttitor lorem blandit.
    </p>
	
    <a href="javascript:void(0);" onclick="showReviewBox();" class="review-button">Share Your Experience</a>

    <div id="reviewBox" style="display: none;">
      <textarea id="reviewInput" placeholder="Write your review here..."></textarea><br>
      <button onclick="submitReview();">Submit</button>
    </div>
    
	<h3>User Reviews</h3>
    <div id="reviewList">
      <!-- Example review -->
      <div class="review">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam efficitur nisl velit, nec vestibulum magna gravida nec.</p>
        <button onclick="editReview(this.parentElement);">Edit</button>
        <button onclick="deleteReview(this);">Delete</button>
      </div>
      <!-- Add more reviews as needed -->
    </div>
  
  </div>
  
</body>
</html>
