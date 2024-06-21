@extends('frontend.master')
@section('content')

    <!-- Labiocert Analysis -->
    <section> 
    <div class="labiocert-analysis tenzero container-width">
        <div class="la-text">
            <h1>Labiocert Analysis</h1>
            <ul>
                <li>1. Pharma Products</li>
                <li>2. Active Pharmaceutical Ingredients $ Excipients</li>
                <li>3. Cosmetic Product</li>
                <li>4. Health Supplement</li>
                <li>5. Veterinary product</li>
                <li>6. Stability Study </li>
            </ul>
            <table class="la-table la-tbl" >
                <tbody class="latbl-txt">
                    <tr>
                        <td> <strong>I.</strong></td>
                        <td colspan="3"><strong>Physico-chemical Analysis</strong></td>
                    </tr>
                    <tr>
                        <td>No.</td>
                        <td>Parameter</td>
                        <td>Remarks</td>
                        <td>Mathod</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Acidity</td>
                        <td>1 day</td>
                        <td rowspan="23">Pharmacopeia</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Anibiotic assay</td>
                        <td>Identification & Assay</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Appearances</td>
                        <td>1day</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Aspect of Solution S</td>
                        <td>1 day</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Average mass</td>
                        <td>1 day</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Color reaction</td>
                        <td>1 day</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Disintegration(solid and semi solid form)</td>
                        <td>1 day</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Dissolution</td>
                        <td>2 day</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Friability</td>
                        <td>1 day</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Hardness(semi solid ad solid form)</td>
                        <td>1 day</td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>HPLC</td>
                        <td>Identification & Assay</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>IR Spectrum</td>
                        <td>1 day</td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>Loss on drying (moisture)</td>
                        <td>1 day</td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>Melting Point</td>
                        <td>1 day</td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>pH</td>
                        <td>1 day</td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td>Reaction precipitation</td>
                        <td>1 day</td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td>Solubility</td>
                        <td>1 day</td>
                    </tr>
                    <tr>
                        <td>18</td>
                        <td>Spectrophotometry UV </td>
                        <td>Identification & Assay</td>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td>TLC</td>
                        <td>2 day</td>
                    </tr>
                    <tr>
                        <td>20</td>
                        <td>Uniformity of content</td>
                        <td>2 day</td>
                    </tr>
                    <tr>
                        <td>21</td>
                        <td>Uniformity of mass of doses deliverd by the measuring device</td>
                        <td>1 day</td>
                    </tr>
                    <tr>
                        <td>22</td>
                        <td>Uniformity of mass/ volume</td>
                        <td>1 day</td>
                    </tr>
                    <tr>
                        <td>23</td>
                        <td>Water content</td>
                        <td>1 day</td>
                    </tr>
                    <tr>
                        <td><strong>II.</strong></td>
                        <td colspan="3"><strong>Microbiological Analysis</strong></td>
                    </tr>
                    <tr>
                        <td>No.</td>
                        <td>Parameter</td>
                        <td>Remarks</td>
                        <td>Method</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Bacterial endotoxins</td>
                        <td>5 days</td>
                        <td rowspan="18">Pharmacopeia</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Bile-tolerant gram-negative bacteria</td>
                        <td>5 days</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Candida albicans</td>
                        <td>5 days</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Efficacy of antimicrobial preservation</td>
                        <td>5 days</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Escherichia.coli</td>
                        <td>5 days</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Gram-negative bacteria</td>
                        <td>5 days</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Pseudomonas aeruginosa</td>
                        <td>5 days</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Saccharomyces</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Salmonella</td>
                        <td>5 days</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <tr>Staphylococcus aureus</tr>
                        <tr>5 days</tr>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>Test for sterility</td>
                        <td>5 days</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>Total aerobic microbial count</td>
                        <td>5 days</td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>Total combined yeasts/molds count</td>
                        <td>7 days</td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>Personal hygiene test (TAMC&TYMC)</td>
                        <td>7 days</td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>Room cleanliness control (air contamination control) (TAMC&TYMC)</td>
                        <td>7 days</td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td>Surface swabs from establishment (Equipment and facilities) (TAMC&TYMC)</td>
                        <td>7 days</td>
                    </tr>
                    <tr>
                        <td><strong>III.</strong></td>
                        <td colspan="3">Stability Study</td>
                    </tr>
                    <tr>
                        <td>No.</td>
                        <td>Parameter</td>
                        <td>Remarks</td>
                        <td>Method</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Real time study (T0, T3, T6, T9, T12, T18, T24 & T36)</td>
                        <td>Base pm selected parameters</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Acelerate study (T0, T3, T6)</td>
                        <td>Base on selected parameters</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td width="32"><strong>IV.</strong></td>
                        <td width="32" colspan="3">Packages fee</td>
                    </tr>
                    <tr>
                        <td>No.</td>
                        <td>Products</td>
                        <td>Remarks</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Pharmaceutical Products(Finish Products, Intermediate Product, Bulk Product for solid form)</td>
                        <td>Physicochemical & dissolution test</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Pharmaceutical Products(Finish Product, Intermediate Prodcut, Bulk Product for liquid and semi solid from)</td>
                        <td>Physicochemical & Microbiological</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Pharmaceutical Active</td>
                        <td>Physicochemical & Microbiological</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>V.</td>
                        <td colspan="3">COSMETICES</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Adhesion test</td>
                        <td>2 days</td>
                        <td>EP 10.0</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Alcohol content</td>
                        <td>2 days</td>
                        <td>ISO 2448:2009</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Betamethasone</td>
                        <td>2 days</td>
                        <td>ASEAN 2019 ACM</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Betamethasone 17-valerate</td>
                        <td>2 days</td>
                        <td>ASEAN 2019 ACM</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Cloud temperature</td>
                        <td>2 days</td>
                        <td>EP 10.0</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Conductivity</td>
                        <td>2 days</td>
                        <td>EP 10.0</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Cooper</td>
                        <td>2 days</td>
                        <td>EP 10.0</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Dexamethasone</td>
                        <td>2 days</td>
                        <td>ASEAN 2019 ACM</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Dryin time in minutes</td>
                        <td>2 days</td>
                        <td>EP 10.0</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Fluoride</td>
                        <td>2 days</td>
                        <td>EP 10.0</td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>Glycolic acid</td>
                        <td>2 days</td>
                        <td>ASEAN 2019 ACM</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>H<sub>2</sub>O<sub>2</sub></td>
                        <td>2 days</td>
                        <td>EP 10.0</td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>Hydroquinone</td>
                        <td>2 days</td>
                        <td>ASEAN 2019 ACM</td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>Iron(Fe)</td>
                        <td>2 days</td>
                        <td>NF ISO 6332</td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>Lactic acid</td>
                        <td>2 days</td>
                        <td>ASEAN 2019 ACM</td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td>Presence of hydrocortisone acetate</td>
                        <td>2 days</td>
                        <td>ASEAN 2019 ACM</td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td>Rust Inhinitor</td>
                        <td>2 days</td>
                        <td>EP 10.0</td>
                    </tr>
                    <tr>
                        <td>18</td>
                        <td>Salicylic acid</td>
                        <td>2 days</td>
                        <td>ASEAN 2019</td>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td>Scratch Test</td>
                        <td>2 days</td>
                        <td>EP 10.0</td>
                    </tr>
                    <tr>
                        <td>20</td>
                        <td>Solubility</td>
                        <td>2 days</td>
                        <td>EP 10.0</td>
                    </tr>
                    <tr>
                        <td>21</td>
                        <td>Thermal stability</td>
                        <td>2 days</td>
                        <td>ASEAN 2019 ACM</td>
                    </tr>
                    <tr>
                        <td>22</td>
                        <td>Thioglycollic acid</td>
                        <td>2 days</td>
                        <td>EP 10.0</td>
                    </tr>
                    <tr>
                        <td>23</td>
                        <td>Tretinoin</td>
                        <td>2 days</td>
                        <td>ASEAN 2019 ACM</td>
                    </tr>
                    <tr>
                        <td>24</td>
                        <td>Triamcinolone acetonide</td>
                        <td>2 days</td>
                        <td>ASEAN 2019 ACM</td>
                    </tr>
                    <tr>
                        <td ><strong>VI.</strong></td>
                        <td  colspan="3"><strong>HEALTH SUPPLEMENT(Black ginger, Collagen, Spirolina, Moringa, Turmeric, Ging seng, fish oil)</strong></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>5,7 dimethyflavone</td>
                        <td>2 days</td>
                        <td>EP 10.0</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Appearances</td>
                        <td>2 days</td>
                        <td> Visuel</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Calcium</td>
                        <td>2 days</td>
                        <td>ISO 6490</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Chromate test</td>
                        <td>1 day</td>
                        <td>EAS 918</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Clearity</td>
                        <td>1 day</td>
                        <td>EP 10.0</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Colour</td>
                        <td>1 day</td>
                        <td>FSSAI 2019</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Conductivity</td>
                        <td>1 day</td>
                        <td>EP 10.0</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Curcumin content</td>
                        <td>1 day</td>
                        <td>EAS 917</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>H<sub>2</sub>0<sub>2</sub></td>
                        <td>2 days</td>
                        <td>EP 10.0</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Hydroxyproline</td>
                        <td>2 days</td>
                        <td>EP 10.0</td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>Iodine Value</td>
                        <td>2 days</td>
                        <td>AOAC</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>Iron(Fe)</td>
                        <td>2 days</td>
                        <td>NF ISO 6332</td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>Mercury</td>
                        <td>3 days</td>
                        <td>USP 44 NF 37</td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>Moisture content</td>
                        <td>1 day</td>
                        <td>ISO 662</td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>Perxide Value</td>
                        <td>2 days</td>
                        <td>AOAC 965.33</td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td>pH</td>
                        <td>2 days</td>
                        <td>ISO 4316</td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td>Protein</td>
                        <td>2 days</td>
                        <td>NF ISO 937</td>
                    </tr>
                    <tr>
                        <td>18</td>
                        <td>Protein</td>
                        <td>2 days</td>
                        <td>NF ISO 937</td>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td>Solubility</td>
                        <td>1 day</td>
                        <td>FDA, (JECFA) 2018</td>
                    </tr>
                    <tr>
                        <td>20</td>
                        <td>Total Fat</td>
                        <td>2 days</td>
                        <td>NF ISO 11085</td>
                    </tr>
                    <tr>
                        <td>21</td>
                        <td>Total flavone</td>
                        <td>2 days</td>
                        <td>EP 10.0</td>
                    </tr>
                    <tr>
                        <td>22</td>
                        <td>Total free fatty acid</td>
                        <td>2 days</td>
                        <td>ISO 7305:2019</td>
                    </tr>
                    <tr>
                        <td>23</td>
                        <td>Total phycocyanins</td>
                        <td>2 days</td>
                        <td>FDA, (JECFA) 2018</td>
                    </tr>
                    <tr>
                        <td>24</td>
                        <td>Viscosity</td>
                        <td>1 day</td>
                        <td>EP 10.0</td>
                    </tr>
                    <tr>
                        <td>25</td>
                        <td>Water soluble solids</td>
                        <td>1 day</td>
                        <td>KS 2848</td>
                    </tr>
                    <tr>
                        <td ><strong></strong>VII.</td>
                        <td  colspan="3"><strong>VETERINARY PRODUCT</strong></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Amoxicillin</td>
                        <td>2 days</td>
                        <td rowspan="12">Pharmacopeia</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Ampicillin</td>
                        <td>2 days</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Brohmexin HCL</td>
                        <td>2 days</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Cefalexine</td>
                        <td>2 days</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Colistin sulfate</td>
                        <td>2 days</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Dexamethasone</td>
                        <td>2 days</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Diclazuril</td>
                        <td>2 days</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Doxycycline</td>
                        <td>2 days</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Enrofloxacin</td>
                        <td>2 days</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Erytromycine Sulfadiazine</td>
                        <td>2 days</td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>Gentamicin Sulface</td>
                        <td>2 days</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>Iron</td>
                        <td>2 days</td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>Levamisol</td>
                        <td>2 days</td>
                        <td >Pharmacopeia</td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>Lincomycin</td>
                        <td>2 days</td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>Neomycin</td>
                        <td>2 days</td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td>Paracetamol</td>
                        <td>2 days</td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td>Sulfadiazine</td>
                        <td>2 days</td>
                    </tr>
                    <tr>
                        <td>18</td>
                        <td>Tilmicosine</td>
                        <td>2 days</td>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td>Trimethorprim</td>
                        <td>2 days</td>
                    </tr>
                    <tr>
                        <td>20</td>
                        <td>Tylosin</td>
                        <td>2 days</td>
                    </tr>
                    <tr>
                        <td>21</td>
                        <td>Vit B1</td>
                        <td>2 days</td>
                    </tr>
                    <tr>
                        <td>22</td>
                        <td>Vit B2</td>
                        <td>2 days</td>
                    </tr>
                    <tr>
                        <td>23</td>
                        <td>Vit B6</td>
                        <td>2 days</td>
                    </tr>
                    <tr>
                        <td>24</td>
                        <td>Vit C</td>
                        <td>2 days</td>
                    </tr>
                    <tr>
                        <td>25</td>
                        <td>PP</td>
                        <td>2 days</td>
                    </tr>
                </tbody>
            </table>
            <article>
                <div class="abbreviation-text lan-txt">
                    <h5>Abbreviation</h5>
                    <div class="abbreviation-list lan-txt ">
                        <p>IR: Infrared Spectroscopy</p>
                        <p>HPLC: High Performance Liquid Chromagraphy</p>
                        <p>API: Active Pharmaceutical Ingredients</p>
                        <p>TLC: Thin Layer Chromatography</p>
                    </div>
                    <ul class="reference-text">
                       <h5>Reference</h5>
                        <li>1. European Pharmacopeia 10.0</li>
                        <li>2. United States Pharmacopeia</li>
                        <li>3. British Pharmacopiea</li>
                        <li>4. Japanse Pharmacopiea</li>
                        <li>5. Internal Pharmacopiea</li>
                        <li>6. ISO standard</li>
                    </ul>
                    <p>For more details regarding test method, please refer to Customer Service.</p>
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
   <!-- End of Labiocert Analysis -->

@endsection

