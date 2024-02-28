<?php include("topbit.php"); ?>

<main class="box">
    <table>
        <tr>
            <td>
                <span class="poemtype">Limerick</span>
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
        <h3>There once was…</h3>
        <p>There once was a dancer called Ray
            He never knew quite what to say</br>
            But man could he move</br>
            He’d jive and he’d groove</br>
            As long as the music did play</p>

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

            <img class="allround" src="images/mount-maunganui-2650709_1920.jpg" alt="Limerick
        Mount Maunganui" width="250" height="250" />

        </div> <!-- / centered -->

    </div> <!-- / poll -->

</aside>

<?php include("bottombit.php"); ?>