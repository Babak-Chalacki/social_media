<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<?php
include "../controller/panel.php";
include "../controller/functions.php";

?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/simplex/bootstrap.min.css"> -->
  <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> -->
  <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
  <link rel="stylesheet" href="../view/css/index.css">
  <style>
    #footer {
      border-radius: 50% 10% 0 0;
      background: rgb(255, 255, 255) !important;
      background: linear-gradient(166deg, rgba(255, 255, 255, 1) 0%, rgba(59, 0, 198, 1) 49%, rgba(255, 255, 255, 1) 100%) !important;
    }

    .footer {
      background-color: #333;
      color: white;
      text-align: center;
      padding: 30px 20px;
    }

    .footer a {
      color: white;
      text-decoration: none;
      margin: 0 10px;
    }

    .footer a:hover {
      text-decoration: underline;
    }

    .footer {
      background: rgb(255, 255, 255);
      background: linear-gradient(166deg, rgba(255, 255, 255, 1) 0%, rgba(59, 0, 198, 1) 49%, rgba(255, 255, 255, 1) 100%);

      .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        /* background-color: #333; */
        /* color: white; */
        text-align: center;
        padding: 10px 0;
      }
    }
  </style>
  <title>index</title>
</head>



<body style="background: rgb(88, 56, 250);">
  <header>
    <div class="container">
      <img class="float-left logo" width="300px" height="" src="../view/img/roxxon-power.webp" alt="logo">

      <form class="float-right form-inline" action="../controller/login_procces.php" method="post" enctype="multipart/form-data">
        <label class="sr-only" for="emailInput">username</label>
        <input type="text" name="username" class="form-control mb-2 mr-sm-2" id="emailInput" placeholder="Enter your username">

        <label class="sr-only" for="passwordInput">Password</label>
        <div class="input-group mb-2 mr-sm-2">
          <input type="text" name="password" class="form-control" id="passwordInput" placeholder="Password">
        </div>
        <div class="clearfix"></div>
        <div class="form-check mb-2 mr-sm-2">
          <input class="form-check-input" type="checkbox" id="inlineFormCheck">
          <label class="form-check-label" for="inlineFormCheck">
            Remember me
          </label>
        </div>

        <button type="submit" class="btn btn-dark mb-2">Log in</button>
      </form>


    </div>
  </header>
  <!--navbar-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
    <a class="navbar-brand" href="#">Social</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="../view/sign-up.php">register <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="../view/profile.php">profile <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Explore
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">

            <a class="dropdown-item" href="#">Groups</a>
            <a class="dropdown-item" href="#">Pages</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Events</a>
          </div>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
  <main>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <h5 class="card-header">Publish new post</h5>
              <div class="card-body">
                <form method="post" action="#">
                  <div class="form-group">
                    <label for="wallInput" class="sr-only" placeholder="Write something">Write something</label>
                    <textarea class="form-control" id="wallInput" rows="2"></textarea>
                  </div>
                  <button type="submit" class="btn btn-dark">Post</button>
                </form>

                <div class="float-right">
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <!-- <label for="file" type="button" class="btn btn-secondary ">Text</label> -->
                    <!-- <label for="file" type="button" class="btn btn-secondary ">Photo</label> -->
                    <label for="file" type="button" class="btn btn-secondary ">Video/photo
                      <?php

                      $fileExtension = pathinfo($userPost["media"], PATHINFO_EXTENSION);

                      // Display media based on its type

                      switch ($fileExtension) {
                        case 'jpg':
                        case 'jpeg':
                        case 'png':
                          // echo '<img src="'.$userPost['media'].'" alt="Image">';
                          break;

                        case 'mp4':
                          echo '<video controls>
                <source src="' . $userPost['media'] . '" type="video/mp4">
                Your browser does not support the video tag.
              </video>';
                          break;

                        case 'mp3':
                          echo '<audio controls>
                <source src="' . $userPost['media'] . '" type="audio/mpeg">
                Your browser does not support the audio tag.
              </audio>';
                          break;

                        case 'pdf':
                          echo '<iframe src="' . $userPost['media'] . '" width="100%" height="600px"></iframe>';
                          break;

                        default:
                          echo 'Unsupported file type';
                      }

                      ?>
                    </label>
                    <input type="file" hidden id="file">
                  </div>
                </div>
              </div>
            </div>
            <div class="card post">

              <div class="comments">

                <!--end of comment-->
                <?php foreach ($post_array as $userPost) : ?>
                  <div class="card comment offset-sm-1">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-2">
                          <a href="#" class="post-avatar"><img loading="lazy" class="img-thumbnail" src="<?php if (isset($userPost["media"])) {
                                                                                                            echo $userPost["media"];
                                                                                                          } else if ($userPost["gender"] == 0) {
                                                                                                            echo "man.png";
                                                                                                          } else {
                                                                                                            echo "woman.png";
                                                                                                          }

                                                                                                          ?>" alt="sea otter">
                            <p class="username text-center"><?php echo $userPost["first_name"] . " " . $userPost["last_name"] ?></p>
                            <!-- <p class="likes text-center">2 likes</p> -->
                          </a>
                          <p class="likes text-center"><?php echo time2str($userPost["time"])  ?></p>
                        </div>
                        <div class="col-sm-10">
                          <div class="bubble">
                            <div class="pointer">
                              <p><?php echo $userPost["caption"] ?>.</p>
                            </div>
                            <div class="pointer-border"></div>
                          </div>
                          <!--end bubble-->
                          <p class="post-actions mt-4">
                            <a href="#">Reply <i class="fas fa-reply"></i> </a>_
                            <a href="#"><?php echo $userPost["likes"]["count"] ?> <i class="fas fa-thumbs-up"></i>
                            </a>
                          </p>
                          <div class="comment-form">
                            <!-- <form class="form-inline"> -->
                              <div class="form-group mb-2">
                                <label for="commentInput" class="sr-only">Comment</label>
                                <input type="text" readonly class="form-control-plaintext" id="commentInput">
                              </div>
                              <!-- modal -->
                              <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#Modal<?php echo $userPost["karbar_id"] ?>">
                                Comments
                              </button>

                              <div class="modal fade" id="Modal<?php echo $userPost["karbar_id"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="exampleModalLabel">Comments</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                   
                                      <div class="container-fluid">
                                        <div class="row">
                                          <div class="col-12">
                                            <div class="col-12">
                                              <!-- ////////////////////////////////////////////////////////////////// -->
                                            <form id="form_comment<?php echo $userPost["post_id"] ?>" class="mt-3">

                                            <input id="textInput" name="text" type="text" style="width: 100%;" class="form-control mb-2" placeholder="comment" aria-label="Last name">
                                                <input name="post_id" type="hidden" style="width: 100%;" class="form-control mb-2" value="<?php echo $userPost["post_id"] ?>" placeholder="comment" aria-label="Last name">
                                                 <center><input id="InputBtn" value="up" type="button" onclick="send_comment(<?php echo $userPost['post_id']; ?>)" class="btn btn-primary mt-2"></center>
                                      </form>
                                            </div>
                                          </div>

                                          <hr class="mt-3" style="border-width:3px; margin-left:-10px; background-color:black;">
                                          <div  class="col-12 mb-2 mt-4">
                                            <?php foreach ($userPost["comments"] as $comment) : ?>
                                              <div id="parentDiv" class="row">
                                                <div id="sonDic" style="border-width:1px; border-style:solid;" class="col mt-2 p-2"><?php echo $comment["text"] ?>
                                                  <span style="margin-left:260px;"> <?php echo  $comment["first_name"] . $comment["last_name"] ?></span>


                                                  <span style="margin-left:260px;"><?php echo time2str($comment["time"]) ?></span>
                                                </div>
                                              </div>

                                            <?php endforeach; ?>
                                          </div>

                                        </div>
                                      </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!-- modal -->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
                <!--end of comment-->
              </div>
            </div>
            <!--end of post-->

          </div>
          <!--end of col-->

          <div class="col-md-4">
            <!-- alert -->
            <?php if (isset($_SESSION['message'])) : ?>

              <div class="col-12">
                <?php if ($_SESSION['message_type'] == 'success') : ?>

                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo $_SESSION["message"]; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                <?php elseif ($_SESSION['message_type'] == 'error') : ?>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?php echo $_SESSION["message"]; ?>

                  </div><?php endif; ?>
                <?php unset($_SESSION["message"]) ?>
              </div><?php endif; ?>
            <!-- alert -->
            <div class="card">
              <h5 class="card-header">Friends</h5>

              <div class="card-body friends">
                <h5 class="card-title">My friends</h5>
                <ul>
                  <li><a href="#"><img class="img-thumbnail" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/15/Sea_otter_cropped.jpg/200px-Sea_otter_cropped.jpg" alt="sea otter"></a></li>
                  <li><a href="#"><img class="img-thumbnail" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/15/Sea_otter_cropped.jpg/200px-Sea_otter_cropped.jpg" alt="sea otter"></a></li>
                  <li><a href="#"><img class="img-thumbnail" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/15/Sea_otter_cropped.jpg/200px-Sea_otter_cropped.jpg" alt="sea otter"></a></li>
                  <li><a href="#"><img class="img-thumbnail" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/15/Sea_otter_cropped.jpg/200px-Sea_otter_cropped.jpg" alt="sea otter"></a></li>
                  <li><a href="#"><img class="img-thumbnail" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/15/Sea_otter_cropped.jpg/200px-Sea_otter_cropped.jpg" alt="sea otter"></a></li>
                  <li><a href="#"><img class="img-thumbnail" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/15/Sea_otter_cropped.jpg/200px-Sea_otter_cropped.jpg" alt="sea otter"></a></li>
                </ul>
                <a class="btn btn-primary" href="#">View all friends</a>
              </div>
            </div>
            <!--end of friends-->
            <div class="card">
              <h5 class="card-header">Groups</h5>
              <div class="card-body">
                <h5 class="card-title">My groups</h5>
                <p class="card-text">Looks like you haven't joined any groups yet.</p>
                <a href="#" class="btn btn-primary">Join a group</a>
              </div>
            </div>
            <!--end of groups-->
          </div>
        </div>
      </div>
    </section>

  </main>
  <footer class="footer">
    <div class="container">
      <div>Contact Information:</div>
      <div>123 Main Street, Anytown, USA</div>
      <div>Phone: 555-555-5555</div>
      <div>Email: info@example.com</div>
      <div>Social Media:</div>
      <div>
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
      </div>

      <div>&copy; 2024. All Rights Reserved.</div>
    </div>
  </footer>
  <script>
 

async function send_comment(post_id) {
  let form = document.getElementById("form_comment" + post_id);
  let form_data = new FormData(form);

  let x = await fetch("../controller/send_comment.php", {
    method: "post",
    body: form_data
  });
  
  let y = await x.text();
  
  let parentDiv = document.getElementById("parentDiv" + post_id)

// let newDIV = document.createElement("DIV")
//  newDIV.setAttribute('class',"col mt-2 p-2")
// let sonDiv = document.createElement("p")
// // sonDiv.setAttribute('class',"form-control mb-2")
// // sonDiv.setAttribute('style','border-width:1px; border-style:solid;')
// sonDiv.innerHTML = form_data.get("text")

// newDIV.append(sonDiv)
// parentDiv.append(newDIV)
}
// let textInput = document.getElementById("textInput")
// let InputBtn = document.getElementById("InputBtn")
// let parentDiv = document.getElementById("parentDiv")
// // let sonDic = document.getElementById("sonDic")

// InputBtn.addEventListener("click",function(){
//   let newDIV = document.createElement("DIV")
//   newDIV.innerHTML = textInput.value
//   parentDiv.append(newDIV)
//   textInput.value = ""
// })
  </script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>