<?php
    $page_title="ACM SIGCOMM 2016";
    
    $og_tags_page = array ("og:description" => "<meta property=\"og:description\" content=\"The organizing committee is delighted to invite you to ACM SIGCOMM 2016, ".
                                               "to be held in Florian&oacute;polis, Brazil, August 22-26 2016. SIGCOMM is the flagship annual conference of the ACM ".
                                               "Special Interest Group on Data Communication (SIGCOMM) on the applications, technologies, architectures, and protocols ".
                                               "for computer communication.\" />");
    include("include/header.php");
?>

<h1>Welcome to Florian&oacute;polis</h1>

<p>The organizing committee is delighted to invite you to ACM SIGCOMM 2016, to be held in Florian&oacute;polis, Brazil, August 22-26 2016.</p>

<p>SIGCOMM is the flagship annual conference of the ACM Special Interest Group on Data Communication (SIGCOMM) on the applications, technologies, architectures, and protocols for computer communication.</p>

<p align="center"><br/><a href="statement-ec.php">Statement by the SIGCOMM Executive Committee</a> and</br><a href="message.php">Message from the General Chairs</a> on the relocation to Florian&oacute;polis</p>

<h2>News</h2>

<?php include("include/news.php"); ?>

<h2>Conference Schedule</h2>

<a href="files/schedule-2016-08-10.pdf" rel="external"><img src="files/schedule-2016-08-10.png" alt="ACM SIGCOMM 2016 - Detailed Conference Schedule" style="width: 100%;"></a>

<h2>Calendar</h2>

<iframe src="https://calendar.google.com/calendar/embed?title=ACM%20SIGCOMM%20Agenda&amp;showTitle=0&amp;showPrint=0&amp;showCalendars=0&amp;mode=AGENDA&amp;height=600&amp;wkst=1&amp;hl=en&amp;bgcolor=%23ffffff&amp;src=fgkdoih822v80dfk304pt56fjo%40group.calendar.google.com&amp;color=%23125A12&amp;ctz=America%2FSao_Paulo" style="border-width:0" width="100%" height="400" frameborder="0" scrolling="no"></iframe>

<h2>Important Dates</h2>

<?php include("include/dates.php"); ?>

<h2>Sponsors</h2>

<div class="sponsors">
	<a href="//www.acm.org/"><img src="images/acm.png" alt="Association for Computing Machinery" /></a>
	<a href="//www.sigcomm.org/"><img src="images/sig.png" alt="ACM SIGCOMM" /></a>
</div>

<?php include ("include/footer.php"); ?>
