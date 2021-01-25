<template>
    <validation-observer 
        tag="div"
        ref="observer"
        v-slot="{ invalid }"
    >
        <v-form
            ref="form"
            name="cleftBaby"
            @reset.native="resetFormData"
            @submit.prevent="validateAndProceed"
        >
            <v-card class="py-0">
                <v-card-text>
                    <v-stepper v-model="question" vertical non-linear class="elevation-0 py-0">
                        <v-stepper-step editable 
                            :complete="checkValidation('1')"
                            :rules="hasState('1') ? [() => checkValidation('1')] : [() => true]"
                            edit-icon="$complete"
                            step="1"
                            class="py-1"
                            data-question="1"
                        >
                            Name of the Baby
                        </v-stepper-step>
                        <v-stepper-content step="1" data-question="1" class="my-0 py-1">
                            <v-stepper-items>
                                <input-text
                                    v-model="form.baby_name"
                                    rules="required|min:2|max:50"
                                    label="Name"
                                    vid="baby_name"
                                    counter="50"
                                    autocomplete
                                    :autofocus="question == 1"
                                    @keydown.enter="!checkValidation('1') || question++"
                                />
                            </v-stepper-items>
                            <v-btn
                                color="primary"
                                v-on:click="question++"
                                :disabled="!checkValidation('1')"
                                small
                            >
                                Continue
                            </v-btn>                
                        </v-stepper-content>

                        <v-stepper-step editable 
                            :complete="hasState('2') ? checkValidation('2') : false"
                            :rules="hasState('2') ? [() => checkValidation('2')] : [() => true]"
                            edit-icon="$complete"
                            step="2"
                            data-question="2"
                            class="py-1"
                        >
                            Age of the baby
                        </v-stepper-step>                    
                        <v-stepper-content step="2" data-question="2" class="my-0 py-0">
                            <v-stepper-items>
                                <v-row>
                                    <v-col cols="6" class="py-0">
                                        <input-text
                                            v-model="form.operation_age"
                                            rules="required|max:50"
                                            label="Age during Operation"
                                            vid="operation_age"
                                            autocomplete
                                            :autofocus="question == 2"
                                            @keydown.enter="checkValidation('2') ? question++ : null"
                                        />
                                    </v-col>
                                    <v-col cols="6" class="py-0">
                                        <input-text
                                            v-model="form.current_age"
                                            rules="required|max:50"
                                            label="Current Age"
                                            vid="current_age"
                                            autocomplete
                                            @keydown.enter="checkValidation('2') ? question++ : null"
                                        />
                                    </v-col>
                                </v-row>
                            </v-stepper-items>
                            <v-btn
                                color="primary"
                                v-on:click="question--"
                                small
                                outlined
                            >
                                Back
                            </v-btn>
                            <v-btn
                                color="primary"
                                v-on:click="question++"
                                :disabled="hasState('2') ? !checkValidation('2') : true"
                                small
                            >
                                Continue
                            </v-btn>                
                        </v-stepper-content>
                        
                        <v-stepper-step editable 
                            :complete="hasState('3') ? checkValidation('3') : false"
                            :rules="hasState('3') ? [() => checkValidation('3')] : [() => true]"
                            edit-icon="$complete"
                            step="3"
                            class="py-1"
                            data-question="3"
                        >
                            Name of father
                        </v-stepper-step>                    
                        <v-stepper-content step="3" data-question="3" class="my-0 py-0">
                            <v-stepper-items>
                                <input-text
                                    v-model="form.father_name"
                                    rules="required|min:2|max:50"
                                    label="Father's Name"
                                    vid="father_name"
                                    counter="50"
                                    autocomplete
                                    :autofocus="question == 3"
                                    @keydown.enter="checkValidation('3') ? question++ : null"
                                />
                            </v-stepper-items>
                            <v-btn
                                v-on:click="question--"
                                small
                                outlined
                            >
                                Back
                            </v-btn>
                            <v-btn
                                color="primary"
                                v-on:click="question++"
                                :disabled="hasState('3') ? !checkValidation('3') : true"
                                small
                            >
                                Continue
                            </v-btn>                
                        </v-stepper-content>

                        <v-stepper-step editable 
                            :complete="hasState('4') ? checkValidation('4') : false"
                            :rules="hasState('4') ? [() => checkValidation('4')] : [() => true]"
                            edit-icon="$complete"
                            step="4"
                            class="py-1"
                            data-question="4"
                        >
                            Name of mother
                        </v-stepper-step>
                        <v-stepper-content step="4" data-question="4" class="my-0 py-0">
                            <v-stepper-items>
                                <input-text
                                    v-model="form.mother_name"
                                    rules="required|min:2|max:50"
                                    label="Mother's Name"
                                    vid="mother_name"
                                    counter="50"
                                    autocomplete
                                    :autofocus="question == 4"
                                    @keydown.enter="checkValidation('4') ? question++ : null"
                                />
                            </v-stepper-items>
                            <v-btn
                                v-on:click="question--"
                                small
                                outlined
                            >
                                Back
                            </v-btn>
                            <v-btn
                                color="primary"
                                v-on:click="question++"
                                :disabled="hasState('4') ? !checkValidation('4') : true"
                                small
                            >
                                Continue
                            </v-btn>                
                        </v-stepper-content>

                        <v-stepper-step editable 
                            :complete="hasState('5') ? checkValidation('5') : false"
                            :rules="hasState('5') ? [() => checkValidation('5')] : [() => true]"
                            edit-icon="$complete"
                            step="5"
                            class="py-1"
                            data-question="5"
                        >
                            Name of guardian
                        </v-stepper-step>
                        <v-stepper-content step="5" data-question="5" class="my-0 py-0">
                            <v-stepper-items>
                                <input-text
                                    v-model="form.guardian_name"
                                    rules="required|min:2|max:50"
                                    label="Guardian's Name"
                                    vid="guardian_name"
                                    counter="50"
                                    autocomplete
                                    :autofocus="question == 5"
                                    @keydown.enter="checkValidation('5') ? question++ : null"
                                />
                            </v-stepper-items>
                            <v-btn
                                color="primary"
                                v-on:click="question--"
                                small
                                outlined
                            >
                                Back
                            </v-btn>
                            <v-btn
                                color="primary"
                                v-on:click="question++"
                                :disabled="hasState('5') ? !checkValidation('5') : true"
                                small
                            >
                                Continue
                            </v-btn>                
                        </v-stepper-content>

                        <v-stepper-step editable 
                            :complete="hasState('6') ? checkValidation('6') : false"
                            :rules="hasState('6') ? [() => checkValidation('6')] : [() => true]"
                            edit-icon="$complete"
                            step="6"
                            data-question="6"
                            class="py-1"
                        >
                            Address
                        </v-stepper-step>                    
                        <v-stepper-content step="6" data-question="6" class="my-0 py-0">
                            <v-stepper-items>
                                <v-row class="justify-content-center">
                                    <v-col cols="6" class="py-0">
                                        <validation-provider
                                            rules="required"
                                            v-slot="{ errors, valid, dirty }"
                                            name="Address Type"
                                            vid="address_type"
                                            @keydown.enter="checkValidation('6') ? question++ : null"
                                        >
                                            <v-radio-group 
                                                v-model="form.address.address_type"
                                                row
                                                :error-messages="errors"
                                                :success="valid && dirty"
                                                hide-details
                                            >
                                                <v-radio value="urban" label="Urban"></v-radio>
                                                <v-radio value="rural" label="Rural"></v-radio>
                                            </v-radio-group>
                                        </validation-provider>
                                    </v-col>
                                </v-row>
                                <v-row>
                                    <v-col cols="6" class="py-0">
                                        <input-text
                                            v-model="form.address.village"
                                            rules="required|min:2|max:50"
                                            label="Village/Road"
                                            vid="address_village"
                                            autocomplete
                                            @keydown.enter="checkValidation('6') ? question++ : null"
                                        />
                                    </v-col>
                                    <v-col cols="6" class="py-0">
                                        <input-text
                                            v-model="form.address.upazilla"
                                            rules="required|min:2|max:50"
                                            label="Upazilla"
                                            vid="address_upazilla"
                                            autocomplete
                                            @keydown.enter="checkValidation('6') ? question++ : null"
                                        />
                                    </v-col>
                                    <v-col cols="6" class="py-0">
                                        <input-text
                                            v-model="form.address.district"
                                            rules="required|min:2|max:50"
                                            label="District"
                                            vid="address_district"
                                            autocomplete
                                            @keydown.enter="checkValidation('6') ? question++ : null"
                                        />
                                    </v-col>
                                    <v-col cols="6" class="py-0">
                                        <input-text
                                            v-model="form.address.division"
                                            rules="required|min:2|max:50"
                                            label="Division"
                                            vid="address_division"
                                            autocomplete
                                            @keydown.enter="checkValidation('6') ? question++ : null"
                                        />
                                    </v-col>
                                </v-row>
                            </v-stepper-items>
                            <v-btn
                                color="primary"
                                v-on:click="question--"
                                small
                                outlined
                            >
                                Back
                            </v-btn>
                            <v-btn
                                color="primary"
                                v-on:click="question++"
                                :disabled="hasState('6') ? !checkValidation('6') : true"
                                small
                            >
                                Continue
                            </v-btn>                
                        </v-stepper-content>

                        <v-stepper-step editable 
                            :complete="hasState('7') ? checkValidation('7') : false"
                            :rules="hasState('7') ? [() => checkValidation('7')] : [() => true]"
                            edit-icon="$complete"
                            step="7"
                            data-question="7"
                            class="py-1"
                        >
                            Contact no(s)
                        </v-stepper-step>
                        <v-stepper-content step="7" data-question="7" class="my-0 py-0">
                            <v-stepper-items>
                                <v-row>
                                    <v-col cols="6" class="py-0">
                                        <input-text
                                            v-model="form.first_contact"
                                            :rules="{required: true, regex:/^(?:\+88|88)?(01[3-9]\d{8})$/}"
                                            label="First Contact"
                                            vid="first_contact"
                                            autocomplete
                                            :autofocus="question == 7"
                                            @keydown.enter="checkValidation('7') ? question++ : null"
                                        />
                                    </v-col>
                                    <v-col cols="6" class="py-0">
                                        <input-text
                                            v-model="form.alternate_contact"
                                            :rules="{regex:/^(?:\+88|88)?(01[3-9]\d{8})$/}"
                                            label="Alternate Contact"
                                            vid="alternate_contact"
                                            :data-optional="true"
                                            autocomplete
                                            @keydown.enter="checkValidation('7') ? question++ : null"
                                        />
                                    </v-col>
                                </v-row>
                            </v-stepper-items>
                            <v-btn
                                color="primary"
                                v-on:click="question--"
                                small
                                outlined
                            >
                                Back
                            </v-btn>
                            <v-btn
                                color="primary"
                                v-on:click="question++"
                                :disabled="hasState('7') ? !checkValidation('7') : true"
                                small
                            >
                                Continue
                            </v-btn>                
                        </v-stepper-content>

                        <v-stepper-step editable 
                            :complete="hasState('8') ? checkValidation('8') : false"
                            :rules="hasState('8') ? [() => checkValidation('8')] : [() => true]"
                            edit-icon="$complete"
                            step="8"
                            class="py-1"
                            data-question="8"
                        >
                            Email
                        </v-stepper-step>                    
                        <v-stepper-content step="8" data-question="8" class="my-0 py-0">
                            <v-stepper-items>
                                <input-email
                                    v-model="form.email"
                                    rules="required|email|unique"
                                    label="Email"
                                    vid="email"
                                    autocomplete
                                    :autofocus="question == 8"
                                    @keydown.enter="checkValidation('8') ? question++ : null"
                                    />
                            </v-stepper-items>
                            <v-btn
                                color="primary"
                                v-on:click="question--"
                                small
                                outlined
                            >
                                Back
                            </v-btn>
                            <v-btn
                                color="primary"
                                v-on:click="question++"
                                :disabled="hasState('8') ? !checkValidation('8') : true"
                                small
                            >
                                Continue
                            </v-btn>                
                        </v-stepper-content>
                        
                        <v-stepper-step editable 
                            :complete="hasState('9') ? checkValidation('9') : false"
                            :rules="hasState('9') ? [() => checkValidation('9')] : [() => true]"
                            edit-icon="$complete"
                            step="9"
                            data-question="9"
                            class="py-1"
                        >
                            Consanguinity of marriage
                        </v-stepper-step>
                    
                        <v-stepper-content step="9" data-question="9" class="my-0 py-0">
                            <v-stepper-items>
                                <v-row class="justify-content-center">
                                    <v-col cols="6" class="py-0">
                                        <validation-provider
                                            rules="required"
                                            v-slot="{ errors, valid, dirty }"
                                            name="Address Type"
                                            vid="address_type"
                                        >
                                            <v-radio-group 
                                                v-model="form.consanguineous_marriage"
                                                row
                                                :error-messages="errors"
                                                :success="valid && dirty"
                                            >
                                                <v-radio :value="true" label="Yes"></v-radio>
                                                <v-radio :value="false" label="No"></v-radio>
                                            </v-radio-group>
                                        </validation-provider>
                                    </v-col>
                                </v-row>
                                <v-row v-if="form.consanguineous_marriage">
                                    <v-col cols="3">
                                        If yes,
                                    </v-col>
                                    <v-col cols="9" class="py-0">
                                        <validation-provider
                                            rules="required"
                                            v-slot="{ errors, valid, dirty }"
                                            name="Address Type"
                                            vid="address_type"
                                        >
                                            <v-radio-group 
                                                v-model="form.consanguinity"
                                                row
                                                :error-messages="errors"
                                                :success="valid && dirty"
                                            >
                                                <v-radio value="maternal" label="Cousin (Maternal)"></v-radio>
                                                <v-radio value="paternal" label="Cousin (Paternal)"></v-radio>
                                                <v-radio value="others" label="Others"></v-radio>
                                            </v-radio-group>
                                        </validation-provider>
                                    </v-col>
                                </v-row>
                            </v-stepper-items>
                            <v-btn
                                color="primary"
                                v-on:click="question--"
                                small
                                outlined
                            >
                                Back
                            </v-btn>
                            <v-btn
                                color="primary"
                                v-on:click="question++"
                                :disabled="hasState('9') ? !checkValidation('9') : true"
                                small
                            >
                                Continue
                            </v-btn>                
                        </v-stepper-content>
                        
                        <v-stepper-step editable 
                            :complete="hasState('10') ? checkValidation('10') : false"
                            :rules="hasState('10') ? [() => checkValidation('10')] : [() => true]"
                            edit-icon="$complete"
                            step="10"
                            data-question="10"
                            class="py-1"
                        >
                            Family H/O  Cleft Lip/Cleft Palate in first degree relatives:
                        </v-stepper-step>
                    
                        <v-stepper-content step="10" data-question="10" class="my-0 py-0">
                            <v-stepper-items>
                                <v-row class="justify-content-center">
                                    <v-col cols="6" class="py-0">
                                        <validation-provider
                                            rules="required"
                                            v-slot="{ errors, valid, dirty }"
                                            name="Family Cleft"
                                            vid="family_cleft"
                                        >
                                            <v-radio-group 
                                                v-model="form.family_cleft"
                                                row
                                                :error-messages="errors"
                                                :success="valid && dirty"
                                            >
                                                <v-radio :value="true" label="Yes"></v-radio>
                                                <v-radio :value="false" label="No"></v-radio>
                                            </v-radio-group>
                                        </validation-provider>
                                    </v-col>
                                </v-row>
                                <v-row v-if="form.family_cleft">
                                    <v-col cols="3">
                                        If yes,
                                    </v-col>
                                    <v-col cols="10" class="py-0">
                                        <validation-provider
                                            rules="required"
                                            v-slot="{ errors, valid, dirty }"
                                            name="Cleft relative"
                                            vid="cleft_relative"
                                        >
                                            <v-radio-group 
                                                v-model="form.family_cleft_relatives"
                                                row
                                                :error-messages="errors"
                                                :success="valid && dirty"
                                            >
                                                <v-radio value="parents" label="Parents"></v-radio>
                                                <v-radio value="offsprings" label="Offsprings"></v-radio>
                                                <v-radio value="siblings" label="Siblings"></v-radio>
                                            </v-radio-group>
                                        </validation-provider>
                                    </v-col>
                                </v-row>
                            </v-stepper-items>
                            <v-btn
                                color="primary"
                                v-on:click="question--"
                                small
                                outlined
                            >
                                Back
                            </v-btn>
                            <v-btn
                                color="primary"
                                v-on:click="question++"
                                :disabled="hasState('10') ? !checkValidation('10') : true"
                                small
                            >
                                Continue
                            </v-btn>                
                        </v-stepper-content>

                        <v-stepper-step editable 
                            :complete="hasState('11') ? checkValidation('11') : false"
                            :rules="hasState('11') ? [() => checkValidation('11')] : [() => true]"
                            edit-icon="$complete"
                            step="11"
                            data-question="11"
                            class="py-1"
                        >
                            H/O preconceptional folic acid supplementation:
                        </v-stepper-step>
                    
                        <v-stepper-content step="11" data-question="11" class="my-0 py-0">
                            <v-stepper-items>
                                <validation-provider
                                    rules="required"
                                    v-slot="{ errors, valid, dirty }"
                                    name="Folic acid supplementation"
                                    vid="folic_acid_supplementation"
                                >
                                    <v-radio-group 
                                        v-model="form.folic_acid_supplementation"
                                        row
                                        :error-messages="errors"
                                        :success="valid && dirty"
                                    >
                                        <v-radio :value="true" label="Yes"></v-radio>
                                        <v-radio :value="false" label="No"></v-radio>
                                    </v-radio-group>
                                </validation-provider>
                            </v-stepper-items>
                            <v-btn
                                color="primary"
                                v-on:click="question--"
                                small
                                outlined
                            >
                                Back
                            </v-btn>
                            <v-btn
                                color="primary"
                                v-on:click="question++"
                                :disabled="hasState('11') ? !checkValidation('11') : true"
                                small
                            >
                                Continue
                            </v-btn>                
                        </v-stepper-content>

                        <v-stepper-step editable 
                            :complete="hasState('12') ? checkValidation('12') : false"
                            :rules="hasState('12') ? [() => checkValidation('12')] : [() => true]"
                            edit-icon="$complete"
                            step="12"
                            data-question="12"
                            class="py-1"
                        >
                            Maternity Diet:
                        </v-stepper-step>
                    
                        <v-stepper-content step="12" data-question="12" class="my-0 py-0">
                            <v-stepper-items>
                                <validation-provider
                                    rules="required"
                                    v-slot="{ errors, valid, dirty }"
                                    name="Maternity Diet"
                                    vid="maternity_diet"
                                >
                                    <v-radio-group 
                                        v-model="form.maternity_diet"
                                        row
                                        :error-messages="errors"
                                        :success="valid && dirty"
                                    >
                                        <v-radio :value="true" label="Yes"></v-radio>
                                        <v-radio :value="false" label="No"></v-radio>
                                    </v-radio-group>
                                </validation-provider>
                            </v-stepper-items>
                            <v-btn
                                color="primary"
                                v-on:click="question--"
                                small
                                outlined
                            >
                                Back
                            </v-btn>
                        </v-stepper-content>
                    </v-stepper>
                </v-card-text>
                <v-card-actions class="pl-15">
                    <v-btn 
                        small
                        type="reset" 
                        color="secondary"
                        :loading="processing"
                    >
                        Reset
                    </v-btn>
                    <v-btn
                        small
                        type="submit"
                        color="primary"
                        :loading="processing"
                        :disabled="invalid"
                    >
                        Save and Proceed
                    </v-btn>
                </v-card-actions>
            </v-card>
        </v-form>
    </validation-observer>
</template>

<script>
export default {
    data() {
        return {
            drawer: false,
            processing: false,
            booted: false,
            question: '1',
            form: {
                // baby_name: 'Shahadat Hossen',
                // father_name: 'Shahadat Hossen',
                // mother_name: 'Shahadat Hossen',
                // guardian_name: 'Shahadat Hossen',
                // operation_age: '1',
                // current_age: '2',
                // address: {
                //     address_type: 'Urban',
                //     village: 'Rajakhali',
                //     upazilla: 'Demra',
                //     district: 'Dhaka',
                //     division: 'Dhaka',
                // },
                // first_contact: '01711085864',
                // alternate_contact: null,
                // email: 'shobujlingdu@gmail.com',
                // consanguineous_marriage: false,
                // consanguinity: null,
                // family_cleft: false,
                // family_cleft_relatives: null,
                // folic_acid_supplementation: false,
                // maternity_diet: true,

                baby_name: null,
                father_name: null,
                mother_name: null,
                guardian_name: null,
                operation_age: null,
                current_age: null,
                address: {
                    address_type: null,
                    village: null,
                    upazilla: null,
                    district: null,
                    division: null,
                },
                first_contact: null,
                alternate_contact: null,
                email: null,
                consanguineous_marriage: null,
                consanguinity: null,
                family_cleft: null,
                family_cleft_relatives: null,
                folic_acid_supplementation: null,
                maternity_diet: null,
            },
            stepperState: [],
        };
    },
    watch: {
        // step(question) {
        //     const target = document.querySelector(`[class*='v-stepper__content'][data-question='${question}']`);
        //     const inputs = target.querySelectorAll('.v-input')

        //     for (let index = 0; index < inputs.length; index++) {
        //         const element = inputs[index];
        //         if (!this.stepperState.includes(question))
        //             this.stepperState.push(question); break;
        //     }
        // },

        // 'form.co_morbidities'(value) {
        //     console.log(this.question)
        // },
    },
    mounted() {
        // console.log('Component mounted.')
    },
    methods:{
        test() {
            console.log(event)
        },
        hasState(question) {
            let hasState = false;
            
            if(this.$el) {
                const target = this.$el.querySelector(`[class*='v-stepper__content'][data-question='${question}']`);
                const inputs = target.querySelectorAll('.v-input')

                for (let index = 0; index < inputs.length; index++) {
                    const element = inputs[index];
                    if(this.stepperState.includes(question)) {
                        hasState = true;
                    } else {
                        if(element.classList.contains('v-input--has-state') || (element.querySelector('input').dataset.optional && this.question == question)) {
                            this.stepperState.push(question);
                            hasState = true;
                            break;
                        }
                    }
                }
            }

            return hasState;
        },
        checkValidation(question) {
            let valid = true;
            
            if(this.$el) {
                const target = this.$el.querySelector(`[class*='v-stepper__content'][data-question='${question}']`);
                
                const inputs = target.querySelectorAll('.v-input')
                for (let index = 0; index < inputs.length; index++) {
                    const element = inputs[index];
                    if(element.querySelector('input').dataset.optional) {
                        if (element.classList.contains('error--text')){
                            valid = false;
                            break;
                        }
                        continue;
                    } else {
                        if (!element.classList.contains('v-input--has-state') || !element.classList.contains('success--text')){
                            valid = false; 
                            break;
                        }
                    }
                }
            }
            
            return valid; 
        },
        validateAndProceed() {
            this.processing = true
            this.$refs.observer.validate() ? this.$emit('save', this.form) : false;
            this.processing = false
        },
        resetFormData() {
            this.processing = true
            this.$refs.form.reset();
            this.$emit('reset', this.form);
            this.$nextTick(() => {
                this.stepperState = [];
                this.processing = false
            })
        },
    },
}
</script>
