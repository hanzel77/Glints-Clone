@push('style')
    <link rel="stylesheet" href="{{asset('css/form.css')}}">
@endpush
<div class="row form-container" id="form-submission">
    <div class="col-12">
        <div class="row justify-content-center">
            <div class="col-9 my-4">
                <div class="container px-5 py-4">
                    <div class="text-center" style="font-size: 2em; color: #fcef41">
                        Bangun Tim Impian Anda
                    </div>
                    <div class="text-center my-4" style="font-size: 1.3em; color: white;">
                        Mulai pengembangan tim Anda dengan konsultasi gratis. Isi form dan representatif Glints akan menghubungi Anda.
                    </div>
                    <form action="/perusahaan/page/konsultasi"  class="border bg-white px-5 py-4 rounded" style="color: #86cff7" method="POST">
                        @csrf
                        <div class="my-3">
                            <label for="exampleFormControlInput1" class="form-label">Email Bisnis <span style="color:red;">*</span></label>
                            <input type="email" class="form-control @error('business_email') is-invalid @enderror" id="exampleFormControlInput1" name="business_email">
                            @error('business_email')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="my-3">
                            <label for="nama_depan" class="form-label">Nama Depan <span style="color:red;">*</span></label>
                            <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="nama_depan" name="first_name">
                             @error('first_name')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="my-3">
                            <label for="nama_belakang" class="form-label">Nama Belakang <span style="color:red;">*</span></label>
                            <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="nama_belakang" name="last_name">
                            @error('last_name')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        {{-- <div class="my-3">
                            <label for="no_telepon" class="form-label">No. Telepon <span style="color:red;">*</span></label>
                            <input type="text" class="form-control @error('telephone') is-invalid @enderror" id="no_telepon" name="telephone">
                        </div>
                        <div class="my-3">
                            <label for="nama_perusahaan" class="form-label">Nama Perusahaan <span style="color:red;">*</span></label>
                            <input type="text" class="form-control @error('company_name') is-invalid @enderror" id="nama_perusahaan" name="company_name">
                        </div> --}}
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Catatan (Jelaskan Kebutuhan Rekrutmen Anda)</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="note"></textarea>
                        </div>
                        <div class="mb-3">
                            Jumlah Karyawan<span style="color:red;">*</span>
                            <div class="form-check">
                                <input class="form-check-input @error('jumlah_karyawan') is-invalid @enderror" type="radio" name="jumlah_karyawan" id="1-50k" value="1-50">
                                <label class="form-check-label" for="1-50k">
                                    1-50 karyawan
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input @error('jumlah_karyawan') is-invalid @enderror" type="radio" name="jumlah_karyawan" id="51-300k" value="51-300">
                                <label class="form-check-label" for="51-300k">
                                    51-300 karyawan
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input @error('jumlah_karyawan') is-invalid @enderror" type="radio" name="jumlah_karyawan" id="301-500k" value="301-500">
                                <label class="form-check-label" for="301-500k">
                                    301-500 karyawan
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input @error('jumlah_karyawan') is-invalid @enderror" type="radio" name="jumlah_karyawan" id="501-1000K" value="501-1000">
                                <label class="form-check-label" for="501-1000K">
                                    501-1000 karyawan
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input @error('jumlah_karyawan') is-invalid @enderror" type="radio" name="jumlah_karyawan" id=">1000k" value=">1000">
                                <label class="form-check-label" for=">1000k">
                                    lebih dari 1000 karyawan
                                </label>
                            </div>
                            @error('jumlah_karyawan')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            Industri Perusahaan <span style="color:red;">*</span> 
                            <div class="form-check">
                                <input class="form-check-input @error('industri') is-invalid @enderror" type="radio" name="industri" id="finance" value="finance">
                                <label class="form-check-label" for="finance">
                                    Finance, Banking & Professionals
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input @error('industri') is-invalid @enderror" type="radio" name="industri" id="industrial" value="industrial">
                                <label class="form-check-label" for="industrial">
                                    Industrial - Manufacturing
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input @error('industri') is-invalid @enderror" type="radio" name="industri" id="advertising" value="advertising">
                                <label class="form-check-label" for="advertising">
                                    Media, Marketing & Advertising 
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input @error('industri') is-invalid @enderror" type="radio" name="industri" id="retail" value="retail">
                                <label class="form-check-label" for="retail">
                                    Retail & FMCG
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input @error('industri') is-invalid @enderror" type="radio" name="industri" id="technology" value="technology">
                                <label class="form-check-label" for="technology">
                                    Technology
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input @error('industri') is-invalid @enderror" type="radio" name="industri" id="new_economy" value="new-economy">
                                <label class="form-check-label" for="new_economy">
                                    New Economy (Mining, Oil & Gas, Waste Collection, etc)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input @error('industri') is-invalid @enderror" type="radio" name="industri" id="others" value="others">
                                <label class="form-check-label" for="others">
                                    Others
                                </label>
                            </div>
                            @error('industri')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                            <div class="my-3">
                                <label for="posisi_pekerjaan" class="form-label">Posisi Pekerjaan <span style="color:red;">*</span></label>
                                <select class="form-select @error('posisi_pekerjaan') is-invalid @enderror" name="posisi_pekerjaan" id="posisi_pekerjaan">
                                    <option value="" selected>Silahkan Pilih</option>
                                    <option value="owner">CEO / Owner</option>
                                    <option value="director">VP / Director</option>
                                    <option value="manager">Manager / Head</option>
                                    <option value="supervisor">Supervisor</option>
                                    <option value="staff">Staff</option>
                                    <option value="jobseekers">Job Seekers</option>
                                    <option value="students">Students</option>
                                    <option value="others">Others</option>
                                </select>
                            @error('posisi_pekerjaan')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                            </div>
                            <div class="my-3">
                                <label for="negara" class="form-label">Negara <span style="color:red;">*</span></label>
                                <select class="form-select @error('negara') is-invalid @enderror" id="negara" name="negara">
                                    <option value="" selected>Silahkan Pilih</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antartica">Antarctica</option>
                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Bouvet Island">Bouvet Island</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Cayman Islands">Cayman Islands</option>
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cocos Islands">Cocos (Keeling) Islands</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Congo">Congo, the Democratic Republic of the</option>
                                    <option value="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cota D'Ivoire">Cote d'Ivoire</option>
                                    <option value="Croatia">Croatia (Hrvatska)</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">Czech Republic</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="East Timor">East Timor</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
                                    <option value="Faroe Islands">Faroe Islands</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="France Metropolitan">France, Metropolitan</option>
                                    <option value="French Guiana">French Guiana</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="French Southern Territories">French Southern Territories</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">Guadeloupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
                                    <option value="Holy See">Holy See (Vatican City State)</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran">Iran (Islamic Republic of)</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
                                    <option value="Korea">Korea, Republic of</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Lao">Lao People's Democratic Republic</option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macau">Macau</option>
                                    <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Micronesia">Micronesia, Federated States of</option>
                                    <option value="Moldova">Moldova, Republic of</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">Norfolk Island</option>
                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Pitcairn">Pitcairn</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russia">Russian Federation</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                                    <option value="Saint LUCIA">Saint LUCIA</option>
                                    <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia">Slovakia (Slovak Republic)</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
                                    <option value="Span">Spain</option>
                                    <option value="SriLanka">Sri Lanka</option>
                                    <option value="St. Helena">St. Helena</option>
                                    <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syria">Syrian Arab Republic</option>
                                    <option value="Taiwan">Taiwan, Province of China</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania">Tanzania, United Republic of</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks and Caicos">Turks and Caicos Islands</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>
                                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Vietnam">Viet Nam</option>
                                    <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                    <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
                                    <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
                                    <option value="Western Sahara">Western Sahara</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Serbia">Serbia</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                                 @error('negara')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                            </div>
                            <div class="my-3">
                                <label for="kebutuhan_bisnis" class="form-label">Kebutuhan Bisnis <span style="color:red;">*</span></label>
                                <select class="form-select @error('kebutuhan_bisnis') is-invalid @enderror" name="kebutuhan_bisnis" id="kebutuhan_bisnis">
                                    <option value="" selected>Silahkan Pilih</option>
                                    <option value="job-seeker">Saya Sedang Mencari Pekerjaan</option>
                                    <option value="talent-recruitment">Talent Recruitment</option>
                                    <option value="talent-management">Talent Management</option>
                                </select>
                                 @error('kebutuhan_bisnis')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                            </div>
                            <div class="my-5 d-flex justify-content-center ">
                                <button type="submit" class="button-form btn">
                                    Jadwalkan Konsultasi
                                </button>
                            </div>
                        </div>



                    </form>
                </div>
            </div>
        </div>
    </div>
</div>