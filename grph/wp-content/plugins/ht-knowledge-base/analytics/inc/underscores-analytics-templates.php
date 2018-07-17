<!-- Feedback Card Template -->
<script type="text/html" id="ht-analytics-card-template">

    <li>
        <div class="hkb-feedbackcard hkb-feedbackcard--<%= feedback.rating %>">
            <header class="hkb-feedbackcard__header">
                <a href="<%= feedback.articleEditUrl %>" class="hkb-feedbackcard__articletitle"><%= feedback.articleTitle %></a>
            </header>

            <div class="hkb-feedbackcard__content">

                <span>
                <%= feedback.snippet %>

                <% if ( feedback.isTruncated == true) { %>
                    <span class="hkb-feedbackcard__more">[...]<span><%= feedback.fullFeedback %></span></span>
                <% } %>
                </span>

            </div>    

            <footer class="hkb-feedbackcard__footer"> 
                <div class="hkb-feedbackcard__avatar">
                    <%= feedback.authorImg %>
                </div>
                <div class="hkb-feedbackcard__author">
                    <%= feedback.authorName %>
                </div> 
                <div class="hkb-feedbackcard__time">
                    <%= feedback.datetime %>
                </div>
            </footer>
        </div>
    </li>

</script>

<script type="text/html" id="ht-analytics-card-nofeedback">

    <li>
        <div class="hkb-feedbackcard hkb-feedbackcard--unhelpful">
            <header class="hkb-feedbackcard__header">
                <a href="#" class="hkb-feedbackcard__articletitle"><?php _e('No comments', 'ht-knowledge-base'); ?></a>
            </header>

            <div class="hkb-feedbackcard__content">
                <span>
                    <?php _e('No one has left any comments for this period, please try selecting another date range.', 'ht-knowledge-base'); ?>
                </span>
            </div>    

            <footer class="hkb-feedbackcard__footer"> 
            </footer>
        </div>
    </li>

</script>