    <?php include('header.php'); ?>
        <div class="container">
            <div class="wrapper">
                <h1> Here's Your Valentine's Poem </h1> 
                <?php
                
                $submit = filter_input(INPUT_POST, 'submit'); 

                function poemDisplay() {
                    $colour = filter_input(INPUT_POST, 'colour');
                    $noun = filter_input(INPUT_POST, 'noun');
                    $person = filter_input(INPUT_POST, 'person');
                    echo "<div class='poemDiv'>";
                    echo "<p> Roses are $colour.</p>";
                    echo "<p> $noun are blue. </p>";
                    echo "<p> Dear $person, Happy Valentine's Day to you! </p>";
                    echo "</div>"; 
                }

                if(isset($submit)) {
                    poemDisplay(); 
                }
                else {
                    "<p> Please submit your info! </p>";
                }

                ?>
                <a href="index.php" class="btn btn-secondary"> Create Another Poem </a> 
            </div>
        </div>
    </body>
</html>