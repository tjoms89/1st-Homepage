<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div id="intro-small" class="water2">
            <div class="row">
                <div class="background5">
                    <h1> Outputmanagement</h1>
                </div>
            </div>
        </div>

        <div id="main"> <!--
            <div class="domtab">
                <ul class="domtabs">
                    <li><a href="#t1">Allgemein</a></li>
                    <li><a href="#t2">Lettershopleistungen</a></li>
                    <li><a href="#t3">Projektunterstützung</a></li>
                    <li><a href="#t4">Prozessberatung</a></li>
                </ul>

                <div>
                    <h2><a name="t1" id="t1">Allgemein</a></h2>
                    <p>In unserer Business Unit Output-Management besch&auml;ftigen wir uns mit der gesamten Korrespondenz eines Unternehmens. Output ist h&auml;ufig mehr als nur Drucken, auch die digitale Korrespondenz geh&ouml;rt zu dem Themenfeld oder die Betrachtung der Archivierungsprozesse. H&auml;ufig sind uneffektive Prozesse zum Generieren der Korrespondenz implementiert. Hier liegt ein Kosteneinsparungs- und/oder Qualit&auml;tssteigerungspotenzial, das durch kleine Prozessanpassungen gehoben werden kann.</p>
                   <p><a href="#top">zurück zur Navigation</a></p>

                </div>

                <div>
                    <h2><a name="t2" id="t2">Lettershopleistungen</a></h2>
                    <p>Wir unterstützen Sie gern mit unseren Lettershopleistungen. Wir übernehmen hier als Full-Service-Anbieter alle Prozessschritte von der Konzeption über die Implementierung bis hin zum Betrieb Ihres Output-Management-Systems. Ihre Korrespondenz ist bei uns in guten und professionellen Händen.</p>
                    <p><a href="#top">zurück zur Navigation</a></p> 
                </div>

                <div>
                    <h2><a name="t3" id="t3">Projektunterstützung</a></h2>
                    <p>Wenn Sie Ihre eigene IT-Infrastruktur im Haus betreiben wollen, unterstützen wir Sie gern bei der Ausprägung und Weiterentwicklung der Systeme. Projektunterstützung im Bereich Customer Communications Management (StreamServe), Datenbeschaffung im SAP und Gestaltung per SAP-Script und SAP Interactive Forms by Adobe sind hier unsere Schwerpunkte. Mit unseren erfahrenen Consultants unterstützen wir Sie im Projektalltag vor Ort oder remote.</p>
                    <p><a href="#top">zurück zur Navigation</a></p> 
                </div>

                <div>
                    <h2><a name="t4" id="t4">Prozessberatung</a></h2>
                    <p>Wenn Sie Ihre Outputprozesse überarbeiten wollen, um mögliche Optimierungsansätze zu identifizieren, stehen wir Ihnen mit unserer Prozessberatung gern unterstützend zur Verfügung. Wir verfügen über langjährige Erfahrungen, sowohl in der Prozessanalyse und -gestaltung, als auch in der Optimierung der Korrespondenzprozesse. Wir beraten Sie bei Fragen zu Make or Buy Entscheidungen, über Ausschreibungsunterstützung bis hin zur Neukonzeption Ihrer gesamten Output-Management-Landschaft.</p>
                    <p><a href="#top">zurück zur Navigation</a></p> 
                </div>

            </div> -->
            <?php the_content(); ?>
        </div>

    <?php endwhile;
else: ?>
    <p><?php _e('Tut uns Leid. Die Seite existiert nicht.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
