 <form method="post">
                        <div class="row g-3">

                <div class="col-12 col-sm-6">
                    <input type="text" class="form-control border-0" placeholder="Your Name" style="height: 55px;" name="username" required="required">
                </div>

            <div class="col-12 col-sm-6">
                <input type="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;" name="email" required="required">
            </div>

            <div class="col-12 col-sm-6">
                <div class="date" id="date" data-target-input="nearest">
                    <input type="text"
                        class="form-control border-0 datetimepicker-input"
                        placeholder="Call Back Date" data-target="#date" data-toggle="datetimepicker" style="height: 55px;" name="user_date" required="required">
                </div>
            </div>

            <div class="col-12 col-sm-6">
                <div class="time" id="time" data-target-input="nearest">
                    <input type="text"
                        class="form-control border-0 datetimepicker-input"
                        placeholder="Call Back Time" data-target="#time" data-toggle="datetimepicker" style="height: 55px;" name="user_time" required="required">
                </div>
            </div>

            <div class="col-12">
                <textarea class="form-control border-0" rows="5" placeholder="Message" name="msg"
                required="required"></textarea>
            </div>

            <div class="col-12">
                <button class="btn btn-primary w-100 py-3" type="submit" name="submit">Submit Request</button>
            </div>

                        </div>
                    </form>