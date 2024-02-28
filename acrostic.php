<?php include("topbit.php"); ?>

<main class="box">
    <table>
        <tr>
            <td>
                <span class="poemtype">Acrostic</span>
            </td>
            <td>
                <button onclick="hideContent()" class="showhide">
                    Learn More...
                </button>
            </td>
        </tr>
    </table>

    <div id="hidden">
        <div class="info">
            Lorem ipsum dolor sit amet consectetur,
            <a href="https://mmc.school.nz">free verse</a>
            adipisicing elit. Laboriosam sapiente
            quisquam facilis rerum, minus ducimus
            recusandae modi dicta adipisci, et quis
            minima temporibus repudiandae dolorem
            tenetur cum. Excepturi, nihil quisquam!
            Source: <a href="https://mmc.school.nz">Yes</a>
        </div>
    </div>

    <article>
        <h3>Dance Invitation</h3>

        <p><b>J</b>oy - where rhythm and motion meet
            <b>O</b>pen hearts embrace the beat</br>
            <b>I</b>n an instant - on your feet</br>
            <b>N</b>othing ever felt this sweet</br>
            <b>T</b>urn, turn and turn some more</br>
            <b>H</b>appiness comes to the fore</br>
            <b>E</b>xuberance is at its core</br>
            </br>
            <b>M</b>uscle memory smooths the way</br>
            <b>O</b>nly love is felt today</br>
            <b>V</b>ivid colours all around</br>
            <b>E</b>nergy - fuelled by sound</br>
            <b>M</b>usic expands to fill the space</br>
            <b>E</b>xcitement now on every face</br>
            '<b>N</b>ow' is a gift, come out to play</br>
            <b>T</b>ake time to dance your stress away.
        </p>


    </article>

</main>

<aside class="box">

    <script>
        function getVote(int) {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("polls").innerHTML = this.responseText;
                }
            }
            xmlhttp.open("GET", "polls/limerick_vote.php?vote=" + int, true);
            xmlhttp.send();
        }
    </script>

    <div id="polls">
        <h3>Was this poem created by human?</h3>

        <form>
            Yes:
            <input type="radio" name="vote" value="0" onclick="getVote(this.value)">
            <br>No:
            <input type="radio" name="vote" value="1" onclick="getVote(this.value)">
        </form>

        <br /><br />

        <div class="centered">

            <img class="allround" src="images/new-zealand-4661427_1920.jpg" alt="Acrostic
        NZ" width="250" height="250" />

        </div> <!-- / centered -->

    </div> <!-- / poll -->

</aside>

<?php include("bottombit.php"); ?>