<spark-update-contact-information :user="user" inline-template>
    <div class="panel panel-default">
        <div class="panel-heading">{{__('main.contact_information')}}</div>

        <div class="panel-body">
            <!-- Success Message -->
            <div class="alert alert-success" v-if="form.successful">
                {{__('main.contact_information_updated')}}
            </div>

            <form class="form-horizontal" role="form">
                <!-- firstname -->
                <div class="form-group" :class="{'has-error': form.errors.has('firstname')}">
                    <label class="col-md-4 control-label">{{__('main.firstname')}}</label>

                    <div class="col-md-6">
                        <input type="text" class="form-control" name="firstname" v-model="form.firstname">

                        <span class="help-block" v-show="form.errors.has('firstname')">
                            @{{ form.errors.get('firstname') }}
                        </span>
                    </div>
                </div>

                <div class="form-group" :class="{'has-error': form.errors.has('lastname')}">
                    <label class="col-md-4 control-label">{{__('main.lastname')}}</label>

                    <div class="col-md-6">
                        <input type="text" class="form-control" name="lastname" v-model="form.lastname">

                        <span class="help-block" v-show="form.errors.has('lastname')">
                            @{{ form.errors.get('lastname') }}
                        </span>
                    </div>
                </div>

                <!-- E-Mail Address -->
                <div class="form-group" :class="{'has-error': form.errors.has('email')}">
                    <label class="col-md-4 control-label">{{__('main.email')}}</label>

                    <div class="col-md-6">
                        <input type="email" class="form-control" name="email" v-model="form.email">

                        <span class="help-block" v-show="form.errors.has('email')">
                            @{{ form.errors.get('email') }}
                        </span>
                    </div>
                </div>

                <!-- Update Button -->
                <div class="form-group">
                    <div class="col-md-offset-4 col-md-6">
                        <button type="submit" class="btn btn-primary"
                                @click.prevent="update"
                                :disabled="form.busy">

                            {{__('main.update')}}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</spark-update-contact-information>
