<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="homeCss.css">
    <title>Seat Booking System</title>
   </head>
   <body>

		<div class="parent">
		    <div class="movie-container">
		      <label>Seat Booking </label>
		      <br/>
		      <br/>
		      <input type="number" id="number" min="1" max="7" value="1"/>
		      <br/>
		      <button class="book" type="submit" onclick="bookSeat()">Book</button>
		      <button class="remain" type="submit" onclick="RemainingSeat()">Remaining Seat</button>
		      <button class="reset" type="submit" onclick="ResetSeat()">Reset Seat Configuartion</button>
		    </div>


	    <div class="container">
	      <div class="row">
	        <div class="seat" id="1">1</div>
	        <div class="seat" id="2">2</div>
	        <div class="seat" id="3">3</div>
	        <div class="seat" id="4">4</div>
	        <div class="seat" id="5">5</div>
	        <div class="seat" id="6">6</div>
	        <div class="seat" id="7">7</div>
	      </div>

	      <div class="row">
	        <div class="seat" id="8">8</div>
	        <div class="seat" id="9">9</div>
	        <div class="seat" id="10">10</div>
	        <div class="seat" id="11">11</div>
	        <div class="seat" id="12">12</div>
	        <div class="seat" id="13">13</div>
	        <div class="seat" id="14">14</div>
	      </div>

	      <div class="row">
	        <div class="seat" id="15">15</div>
	        <div class="seat" id="16">16</div>
	        <div class="seat" id="17">17</div>
	        <div class="seat" id="18">18</div>
	        <div class="seat" id="19">19</div>
	        <div class="seat" id="20">20</div>
	        <div class="seat" id="21">21</div>
	      </div>

	      <div class="row">
	        <div class="seat" id="22">22</div>
	        <div class="seat" id="23">23</div>
	        <div class="seat" id="24">24</div>
	        <div class="seat" id="25">25</div>
	        <div class="seat" id="26">26</div>
	        <div class="seat" id="27">27</div>
	        <div class="seat" id="28">28</div>
	      </div>

	      <div class="row">
	        <div class="seat" id="29">29</div>
	        <div class="seat" id="30">30</div>
	        <div class="seat" id="31">31</div>
	        <div class="seat" id="32">32</div>
	        <div class="seat" id="33">33</div>
	        <div class="seat" id="34">34</div>
	        <div class="seat" id="35">35</div>
	      </div>

	      <div class="row">
	        <div class="seat" id="36">36</div>
	        <div class="seat" id="37">37</div>
	        <div class="seat" id="38">38</div>
	        <div class="seat" id="39">39</div>
	        <div class="seat" id="40">40</div>
	        <div class="seat" id="41">41</div>
	        <div class="seat" id="42">42</div>
	      </div>

	      <div class="row">
	        <div class="seat" id="43">43</div>
	        <div class="seat" id="44">44</div>
	        <div class="seat" id="45">45</div>
	        <div class="seat occupied" id="46">46</div>
	        <div class="seat occupied" id="47">47</div>
	        <div class="seat" id="48">48</div>
	        <div class="seat" id="49">49</div>
	      </div>

	      <div class="row">
	        <div class="seat" id="50">50</div>
	        <div class="seat" id="51">51</div>
	        <div class="seat" id="52">52</div>
	        <div class="seat" id="53">53</div>
	        <div class="seat" id="54">54</div>
	        <div class="seat occupied" id="55">55</div>
	        <div class="seat occupied" id="56">56</div>
	      </div>

	      <div class="row">
	        <div class="seat" id="57">57</div>
	        <div class="seat" id="58">58</div>
	        <div class="seat" id="59">59</div>
	        <div class="seat" id="60">60</div>
	        <div class="seat" id="61">61</div>
	        <div class="seat" id="62">62</div>
	        <div class="seat" id="63">63</div>
	      </div>

	      <div class="row">
	        <div class="seat" id="64">64</div>
	        <div class="seat" id="65">65</div>
	        <div class="seat occupied" id="66">66</div>
	        <div class="seat occupied" id="67">67</div>
	        <div class="seat" id="68">68</div>
	        <div class="seat" id="69">69</div>
	        <div class="seat" id="70">70</div>
	      </div>

	      <div class="row">
	        <div class="seat" id="71">71</div>
	        <div class="seat" id="72">72</div>
	        <div class="seat" id="73">73</div>
	        <div class="seat occupied" id="74">74</div>
	        <div class="seat occupied" id="75">75</div>
	        <div class="seat occupied" id="76">76</div>
	        <div class="seat" id="77">77</div>
	      </div>

	      <div class="row">
	        <div class="seat" id="78">78</div>
	        <div class="seat" id="79">79</div>
	        <div class="seat" id="80">80</div>
	      </div>

	      	<ul class="showcase">
		      <li>
		        <div class="seat"></div>
		        <small>N/A</small>
		      </li>

		      <li>
		        <div class="seat selected"></div>
		        <small>Selected</small>
		      </li>

		      <li>
		        <div class="seat occupied"></div>
		        <small>Occupied</small>
		      </li>
	    	</ul>
	     </div>
	    </div>
	</body>
</html>
<script type="text/javascript" src="database.json"></script>
<script type="text/javascript" src="script.js"></script>