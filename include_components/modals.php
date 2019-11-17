        <!-- Modal Structure -->
        <div id="modal_out" class="modal">
          <div class="modal-content">
            <h4>Logging Out...</h4>
            <p>Are you sure you want to log out?</p>
          </div>
          <form class="modal-footer" action="db/validate_signup_login.php" method='post'>
            <button type='submit' class="modal-close red waves-effect waves-green btn" value='log_out' name='log_out'>Yes</button>
            <button type='button' class="modal-close green waves-effect waves-green btn">No</button>
          </form>
        </div>

        <!-- Modal Structure -->
        <div id="modal_approved" class="modal">
          <div class="modal-content">
            <h4 class='green-text'>APPROVED!</h4>
            <p>Document has been approved successfully.</p>
            <p>Please make your way to our offices for collection.</p>
          </div>
          <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect green waves-green btn">Okay</a>
          </div>
        </div>

        <!-- Modal Structure -->
        <div id="modal_denied" class="modal">
          <div class="modal-content">
            <h4 class='red-text'>DENIED!</h4>
            <p>Document has NOT been approved.</p>
            <p>For any queries, please call us or make your way to our offices.</p>
          </div>
          <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect red waves-green btn">Okay</a>
          </div>
        </div>

        <!-- Modal Structure -->
        <div id="modal_pending" class="modal">
          <div class="modal-content">
            <h4 class='yellow-text'>SUBMITTED</h4>
            <p>Your document is being reviewed.</p>
          </div>
          <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect yellow black-text waves-green btn">Okay</a>
          </div>
        </div>

        <!-- Modal Structure -->
        <div id="modal_coming" class="modal">
          <div class="modal-content">
            <h4 class='cyan-text'>Coming Soon...</h4>
            <p>Like we said, we'll be with you shortly</p>
          </div>
          <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect cyan waves-green btn">Okay</a>
          </div>
        </div>