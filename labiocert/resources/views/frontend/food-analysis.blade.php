@extends('frontend.master')
@section('content')
    <!-- Food Analysis -->
    <section>
    <div class="food-analysis tenzero container-width">
        <div class="tbl-food">
            <div class="f-text">
                <h1>Analysis Fees For Food</h1>
            </div>
            <table class="la-table ftable" >
                <tbody class="ftbl-txt">
                    <tr>
                        <td colspan="4"style="text-align: center;"><strong>Microbiological Analysis for Food</strong></td>
                    </tr>
                    <tr>
                        <td>No.</td>
                        <td>Parameters</td>
                        <td>Duration Analysis</td>
                        <td>Method</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Total aerobic microbial count</td>
                        <td>5 days</td>
                        <td>ISO 4833</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Acetic acid bacteria</td>
                        <td>7 days</td>
                        <td>INTERNATIONAL ŒNOLOGICAL CODEX, COEI-2-CONBA:2009 </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Antimicrobial efficacy test</td>
                        <td>3 days</td>
                        <td>DEAS 789:2021</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Bacillus cereus</td>
                        <td>4 days</td>
                        <td>NF ISO 7932</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Candida albicans</td>
                        <td>7 days</td>
                        <td>ISO 18416</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td></td>
                        <td> days</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Determination of disinfecting efficacy</td>
                        <td>3 days</td>
                        <td>DEAS 789:2021</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Enterobacteriace</td>
                        <td>3 days</td>
                        <td>ISO 21528</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Escherichia coli(E. coli)</td>
                        <td>2 days</td>
                        <td>ISO 16649-2</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Facal coliform counts</td>
                        <td>4 days</td>
                        <td>BAM Chapter 4, FDA 2020BAM</td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>Fecal Streptococci</td>
                        <td>3 days</td>
                        <td>ISO 7899</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>Halophilic yeast</td>
                        <td>7 days</td>
                        <td>DUS 203</td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>Lactobacillus</td>
                        <td>3 days</td>
                        <td>ISO 7889</td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>Lipolytic bacteria</td>
                        <td>4 days</td>
                        <td>IS 4251</td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>Microbial cleanness, cfu/g max</td>
                        <td>7 days</td>
                        <td>ISO 14683</td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td>Osmophilic yeast count </td>
                        <td>7 days</td>
                        <td> US.FDA.BAM 18, 2001</td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td>Proteolytic bacteria count</td>
                        <td>3 days </td>
                        <td>IS 4251</td>
                    </tr>
                    <tr>
                        <td>18</td>
                        <td>Pseudomonas aeruginosa</td>
                        <td>4 days</td>
                        <td>ISO 13720</td>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td>Saccharomyces</td>
                        <td>5 days</td>
                        <td>EU 10.0</td>
                    </tr>
                    <tr>
                        <td>20</td>
                        <td>Samonella</td>
                        <td>6 days</td>
                        <td>ISO 6579</td>
                    </tr>
                    <tr>
                        <td>21</td>
                        <td>Shigella</td>
                        <td>5 days</td>
                        <td>ISO 11290</td>
                    </tr>
                    <tr>
                        <td>22</td>
                        <td>Spore Former (anaerobic)</td>
                        <td>3 days </td>
                        <td> ISO 4883</td>
                    </tr>
                    <tr>
                        <td>23</td>
                        <td>Staphylococcus aureus</td>
                        <td>4 days</td>
                        <td>ISO 6888-1</td>
                    </tr>
                    <tr>
                        <td>24</td>
                        <td>Sulphite-Reducing Anaerobic Spores</td>
                        <td>3 days</td>
                        <td>ISO 1513</td>
                    </tr>
                    <tr>
                        <td>25</td>
                        <td>Test for sterility</td>
                        <td>14 days</td>
                        <td>IP, Tenth Edition, 2020</td>
                    </tr>
                    <tr>
                        <td>26</td>
                        <td>Thermoresistant spores of thermophilic bacteria</td>
                        <td>3 days</td>
                        <td>ISO/TS 27265</td>
                    </tr>
                    <tr>
                        <td>27</td>
                        <td>Total anaerobic bacteria</td>
                        <td> 4 days</td>
                        <td> ISO 21149</td>
                    </tr>
                    <tr>
                        <td>28</td>
                        <td>Total Coliform</td>
                        <td>2 days</td>
                        <td>ISO 4832</td>
                    </tr>
                    <tr>
                        <td>29</td>
                        <td>Total combined yeasts/molds count</td>
                        <td>7 days</td>
                        <td>ISO 21527</td>
                    </tr>
                    <tr>
                        <td>30</td>
                        <td>Vibro Cholera</td>
                        <td>5 days</td>
                        <td>ISO/TS 21872</td>
                    </tr>
                    <tr>
                        <td colspan="4" style="text-align: center;"><strong>Specific Product Analysis</strong></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Carbonated and noncarbonated beverages</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Roast cashew nutspecification</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Milk</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Fermented milk</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Milk powder</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Pasteurized cream</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Butter and Cheese</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Biscuits</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Dry and instead product</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Fresh meat and edible offal</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>Smock meat</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>Dry meat </td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>Meat soups</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>Fresh fish from markets/retails and landing centers</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>Fresh fish (wild)</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td>Fresh fish (aquaculture)</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td>Smoked products</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>18</td>
                        <td>Dry fish</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td>Prohok</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>20</td>
                        <td>Fish sauce</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>21</td>
                        <td>Cooked fish products</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>22</td>
                        <td>Surface swabs from fishing vessels</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>23</td>
                        <td>Soups powder</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>24</td>
                        <td>Mayonnaise and sauce</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>25</td>
                        <td>Vinegar</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>26</td>
                        <td>Species</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>27</td>
                        <td>Ceral (whole)</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>28</td>
                        <td>Ceral flours</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>29</td>
                        <td>Topping, desert and backery product</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>30</td>
                        <td>Fresh vegetable and fruit</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>31</td>
                        <td>Dry and frozen vegetable and fruit</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>32</td>
                        <td>Jelly, fruit in syrup and jam</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>33</td>
                        <td>Chocolate and candy</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>34</td>
                        <td>Chewing gum</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>35</td>
                        <td>Honey</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>36</td>
                        <td>Hard and liquid brown sugar</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>37</td>
                        <td>Enzyme</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>38</td>
                        <td>Food color</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>39</td>
                        <td>Gums</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>40</td>
                        <td>Eggs product</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>41</td>
                        <td>Yeast</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>42</td>
                        <td>Gelatin</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>43</td>
                        <td>Fruit juice and drink </td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>44</td>
                        <td>Herbal tea</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>45</td>
                        <td>Health supplement</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>46</td>
                        <td>Coffee instead</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>47</td>
                        <td>Edible insect</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>48</td>
                        <td>Alcohol-based instant hand sanitizer</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>49</td>
                        <td>Beef for burget, kebab, meat ball and meat loaf</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>50</td>
                        <td>Dried and dry-salted sausages fish</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>51</td>
                        <td>salted fermented vegetables</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>52</td>
                        <td>Tofu</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>53</td>
                        <td>Coconut flour and milk</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>54</td>
                        <td>Snak food</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>55</td>
                        <td>Meat past and paté (heat treat)</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>56</td>
                        <td>Ethnic food products-dry shrimps</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>57</td>
                        <td>Salt fermented fish and shrimps</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>58</td>
                        <td>Powder beverages</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>59</td>
                        <td>Cosmetic product</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>60</td>
                        <td>Herbal medicinal products</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>61</td>
                        <td>Alcoholic beverages (beer and vin)</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>62</td>
                        <td>Bird nest</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>63</td>
                        <td>White sugar</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>64</td>
                        <td>Personal hygiene test</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>65</td>
                        <td>Room cleanliness control (air contamination control)</td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>66</td>
                        <td>Surface swabs from establishment (equipement and facilities)</td>
                        <td colspan="2"></td>
                    </tr>
                </tbody>
            </table>
            <article>
                <div class="reference-food">
                    <h6>Reference :</h6>
                    <ul>
                        <li>1. ISO : International Organization for Standardization</li>
                        <li>2. AOAC : Association of official analytical chemists</li>
                        <li>3. EP 10.0: Pharmacopiea european 10.0</li>
                        <li>4. Ministry of agriculture, forestry and fisheries, December 2020 </li>
                        <li>5. Codex alimentarius commision</li>
                    </ul>
                    <div class="service-f-analysis">
                        <p>For more details regarding test method, please refere to Customer Service</p>
                        <h6>CONTACT US:</h6>
                        <p>Name: Ms.Khon Somaly (Customer service)</p>
                        <p>Tel: 017 594 243 / 093 594 243</p>
                        <p>Telegram: 093 594 243</p>
                        <p>Email: info@labiocert.com</p>
                    </div>
                </div>
            </article>
        </div>
        <aside>
            <div class="adversting fixed ads-service">
                <div class="last-new">
                    <span class="lastnew">LASTEST NEWS</span>
                </div>
                <div class="lastnew-detail">
                    <div class="img-khmernew ">
                        <a href="/media/newyear" class="img-lastnew"><img src="{{URL('/assets/image/allimg1.jpg')}}" alt=""></a>
                        <a href="/media/newyear" class="text-lastnew">New year and double birthday</a>
                    </div>
                    <div class="img-launchnew ">
                        <a href="/media/launchofKEM" class="img-lastnew"><img src="{{URL('/assets/image/allimg2.jpg')}}" alt=""></a>
                        <a href="/media/launchofKEM" class="text-lastnew">Launch of KEM</a>
                    </div>
                    <div class="img-kinal ">
                        <a href="/media/kinal" class="img-lastnew"><img src="{{URL('/assets/image/allimg3.jpg')}}" alt=""></a>
                        <a href="/media/kinal" class="text-lastnew">KINAL is the symbol of the effective pain-killer</a>
                    </div>
                </div>
            </div>
        </aside>
        
    </div>
</section>
    <!-- End of food analysis -->
@endsection


