$(document).ready(function() {

  let comments = $('.comments-container')
  var saveComment = function (data) {
  
    $(Object.keys(data.pings)).each(function (index, userId) {
      var fullname = data.pings[userId];
      var pingText = '@' + fullname;
      data.content = data.content.replace(new RegExp('@' + userId, 'g'), pingText);
    });
  
    return data;
  }
  
  if(comments) {
    comments.comments({
      profilePictureURL: '../../img/source/avatar/male.svg',
      currentUserId: 1,
      roundProfilePictures: true,
      textareaRows: 1,
      enableAttachments: true,
      enableHashtags: true,
      enablePinging: true,
      scrollContainer: $(window),
    
      searchUsers: function (term, success, error) {
        setTimeout(function () {
          success(usersArray.filter(function (user) {
            var containsSearchTerm = user.fullname.toLowerCase().indexOf(term.toLowerCase()) != -1;
            var isNotSelf = user.id != 1;
            return containsSearchTerm && isNotSelf;
          }));
        }, 500);
      },
    
      getComments: function (success, error) {
        setTimeout(function () {
          success(commentsArray);
        }, 500);
      },
    
      postComment: function (data, success, error) {
        setTimeout(function () {
          success(saveComment(data));
        }, 500);
      },
    
      putComment: function (data, success, error) {
        setTimeout(function () {
          success(saveComment(data));
        }, 500);
      },
    
      deleteComment: function (data, success, error) {
        setTimeout(function () {
          success();
        }, 500);
      },
    
      upvoteComment: function (data, success, error) {
        setTimeout(function () {
          success(data);
        }, 500);
      },
    
      validateAttachments: function (attachments, callback) {
        setTimeout(function () {
          callback(attachments);
        }, 500);
      },
    
    });
  }

})