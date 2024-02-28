<?php include("topbit.php"); ?>

<main class="box">
    <table>
        <tr>
            <td>
                <span class="poemtype">Free Verse</span>
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

        <h3>Choreographed Grace</h3>

        <p>
            Don't believe that dancers are awkward?</br>
            dancers are graceful beyond belief.</br>
            Are you upset by how liquid they are?</br>
            Does it tear you apart to see the dancers so gracious?</br>
            Don't believe that the waltz is rugged?</br>
            the waltz is delicate beyond belief.</br>
            Does the waltz make you shiver?</br>
            does it?</br>
            Pay attention to the choreography,</br>
            the choreography is the most little dancing of all.</br>
            Down, down, down into the darkness of the choreography,</br>
            Gently it goes - the wee, the smaller, the short.</br>
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
            xmlhttp.open("GET", "polls/freeverse_vote.php?vote=" + int, true);
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

            <img class="allround" src="images/adult-1869212_1920.jpg" alt="Free Verse
        Adult" width="250" height="250" />

        </div> <!-- / centered -->

    </div> <!-- / poll -->

</aside>


<?php include("bottombit.php"); ?>