<?php
  // This is a single line comment

  /*
    This is a 
    multi-line comment
  */

  ini_set('display_errors', 1);
  error_reporting(E_All);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sanchez&display=swap" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <title>Welcome to week 8</title>
</head>
<body>
    <h1 class="hidden">Welcome to PHP</h1>
    <a class="hidden" href="#content">Skip to content</a>
    <header>
    </header>
    <main id="content">
        <section>
          <h2>Strings</h2>
            <p>
                a:) Writing to the page<br>
                <?php     
                  $fname = "Bilbo";
                  $lname = "Baggins";
                  echo $fname;
                  echo "&nbsp;";
                  echo $lname;
                  // echo 의 역할을 아마 console.log 처럼 웹사이트에 출력하는 것을 말함.
                ?>
            </p>
            <p>
                b:) Concat<br>
                <?php     
                  $fname = "Gandalf";
                  $lname = "The Grey";
                  echo $fname."&nbsp;".$lname;
                ?>
            </p>
            <p>
                c:) Combinations and Sub<br>
                <?php     
                  $fname = "Frodo";
                  $lname = "Baggins";
                  $fullname = $fname."&nbsp;".$lname;
                  // echo $fullname;
                  echo "<h3 class=\"title\">{$fname}&nbsp;{$lname}</h3>";
                ?>
            </p>

            <h2>Strings & Functions</h2>
            <p>
              a:) Building up a string<br>
              <?php
                $part1 = "The quick brown fox ";
                $part2 = "jumped over the lazy dog.";
                $part3 = $part1;
                echo $part3 .= $part2;
              ?>
            </p>
            <p>
              b:) Word Wrap<br>
              <?php
                $content = "The quick brown fox jumped over the lazy dog.";
                $contents = "the quick brown fox jumped over the lazy dog.";
                $newcontent = wordwrap($content, 18, "<br>");
                // (이 컨텐츠를, 스페이스 포함해서 글씨가 몇 개가 되면, 아래로 내릴거에요.) 라는 뜻임.
                echo $newcontent;
                
              ?>
            </p>
            <p>
              c:) Character Case<br>
              <?php
                echo strtolower($content)."<br>";
                echo strtoupper($content)."<br>";
                echo ucfirst($contents)."<br>";
                // 첫글자를 대문자로 바꿔줌
                echo ucwords($contents);
                // 모든 단어의 첫글자를 대문자로 바꿔줌.
              ?>
            </p>
            <p>
              d:) Working with strings<br>
              <?php
                echo "Length: ".strlen($contents)."<br>";
                echo "Find: ".strstr($contents, "lazy")."<br>";
                // (여기에서, lazy 라는 단어를 찾아줘)
                echo "Replace: ".str_replace("lazy", "aggressive", $contents)."<br>";
                // (lazy 라는 단어를, aggressive로 바꿔줘, 여기에서)
                
              ?>
            </p>
        </section>
    </main>
    <footer>

    </footer>
</body>
</html>