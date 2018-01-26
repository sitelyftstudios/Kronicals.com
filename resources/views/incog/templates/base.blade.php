<div class="baseMessaging">
    <div class="topBaseMessage">
        <h3>Send something meaningful to <?php echo $profile->name; ?></h3>
    </div>
    <div class="bottomBaseMessage">
        <form action="{{ route('incog.message_send') }}" method="post" id="incogMessageMaker">
            <div class="form-group">
                <textarea placeholder="Say something nice :)" class="form-control" id="message" name="message" rows="3"></textarea>
            </div>
            <input type="hidden" id="usi" name="usi" value="<?php echo $profile->unique_salt_id; ?>" />
            {{ csrf_field() }}
            <input type="hidden" id="token" name="token" value="{{ csrf_token() }}" />
            <input type="submit" class="btn btn-success" value="Send" />
        </form>
    </div>
</div>