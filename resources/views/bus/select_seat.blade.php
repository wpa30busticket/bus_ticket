@extends('layouts/bus')
@section('title', 'Bus Ticket')
@section('content')
	<div class="search-box"  id="header">
		<div class="container">
			<div class="row"  id="page1">
				<div class="col-md-3 col-sm-5 col-xs-6 margin-top-sm">
					<label class="text-my hidden-lg hidden-md">Leaving From</label>

					<select class="form-control text-my" name="sourceId" id="sourceId" tabindex="-1">
						<option class="text-my" value="">--- Select ---</option>

						<option class="text-my" value="39 Phayagyi">

							39 Phayagyi

						</option>

						<option class="text-my" value="Ahtet Min Hla">

							Ahtet Min Hla

						</option>

						<option class="text-my" value="Ann">

							Ann

						</option>

						<option class="text-my" value="AungLan">

							AungLan

						</option>

						<option class="text-my" value="Aungpan">

							Aungpan

						</option>

						<option class="text-my" value="Ayadaw">

							Ayadaw

						</option>

						<option class="text-my" value="Bagan/Nyaung-U">

							Bagan/Nyaung-U

						</option>

						<option class="text-my" value="Bago">

							Bago

						</option>

						<option class="text-my" value="Bahin">

							Bahin

						</option>

						<option class="text-my" value="Bhamo">

							Bhamo

						</option>

						<option class="text-my" value="Bilin">

							Bilin

						</option>

						<option class="text-my" value="Bokpyin">

							Bokpyin

						</option>

						<option class="text-my" value="Budalin">

							Budalin

						</option>

						<option class="text-my" value="Chauk">

							Chauk

						</option>

						<option class="text-my" value="ChaungU">

							ChaungU

						</option>

						<option class="text-my" value="Chaungzon">

							Chaungzon

						</option>

						<option class="text-my" value="Daik-U">

							Daik-U

						</option>

						<option class="text-my" value="Dawei">

							Dawei

						</option>

						<option class="text-my" value="Demoso">

							Demoso

						</option>

						<option class="text-my" value="Gangaw">

							Gangaw

						</option>

						<option class="text-my" value="Gwa">

							Gwa

						</option>

						<option class="text-my" value="Gway Gone">

							Gway Gone

						</option>

						<option class="text-my" value="Gyobingauk">

							Gyobingauk

						</option>

						<option class="text-my" value="Hakha">

							Hakha

						</option>

						<option class="text-my" value="HeHoe">

							HeHoe

						</option>

						<option class="text-my" value="Hopin">

							Hopin

						</option>

						<option class="text-my" value="Hpa-An">

							Hpa-An

						</option>

						<option class="text-my" value="Hpayargyi">

							Hpayargyi

						</option>

						<option class="text-my" value="Hseni">

							Hseni

						</option>

						<option class="text-my" value="Hsipaw">

							Hsipaw

						</option>

						<option class="text-my" value="Htonebo">

							Htonebo

						</option>

						<option class="text-my" value="InDaw">

							InDaw

						</option>

						<option class="text-my" value="Inle">

							Inle

						</option>

						<option class="text-my" value="Inle">

							Inle

						</option>

						<option class="text-my" value="InnMa">

							InnMa

						</option>

						<option class="text-my" value="Ka Nyut Kwin">

							Ka Nyut Kwin

						</option>

						<option class="text-my" value="Kabyu">

							Kabyu

						</option>

						<option class="text-my" value="Kaing Taw Ma">

							Kaing Taw Ma

						</option>

						<option class="text-my" value="Kalar Pyin">

							Kalar Pyin

						</option>

						<option class="text-my" value="Kalaw">

							Kalaw

						</option>

						<option class="text-my" value="Kale">

							Kale

						</option>

						<option class="text-my" value="Kamma">

							Kamma

						</option>

						<option class="text-my" value="Kanbya">

							Kanbya

						</option>

						<option class="text-my" value="Kawkareik">

							Kawkareik

						</option>

						<option class="text-my" value="Kawthaung">

							Kawthaung

						</option>

						<option class="text-my" value="Khinoo">

							Khinoo

						</option>

						<option class="text-my" value="Kume">

							Kume

						</option>

						<option class="text-my" value="Kutkai">

							Kutkai

						</option>

						<option class="text-my" value="Kyaikkami">

							Kyaikkami

						</option>

						<option class="text-my" value="Kyaikkami">

							Kyaikkami

						</option>

						<option class="text-my" value="Kyaikto">

							Kyaikto

						</option>

						<option class="text-my" value="Kyauk Padaung">

							Kyauk Padaung

						</option>

						<option class="text-my" value="Kyauk Taga">

							Kyauk Taga

						</option>

						<option class="text-my" value="Kyaukme">

							Kyaukme

						</option>

						<option class="text-my" value="Kyaukphyu">

							Kyaukphyu

						</option>

						<option class="text-my" value="Kyaukse">

							Kyaukse

						</option>

						<option class="text-my" value="Kyauktaw">

							Kyauktaw

						</option>

						<option class="text-my" value="Kyaukyit">

							Kyaukyit

						</option>

						<option class="text-my" value="Kyaw">

							Kyaw

						</option>

						<option class="text-my" value="Kyeintali">

							Kyeintali

						</option>

						<option class="text-my" value="Kyunchaung">

							Kyunchaung

						</option>

						<option class="text-my" value="Lashio">

							Lashio

						</option>

						<option class="text-my" value="Lat Pan Hla">

							Lat Pan Hla

						</option>

						<option class="text-my" value="Lat YIn Ma">

							Lat YIn Ma

						</option>

						<option class="text-my" value="Lawksawk">

							Lawksawk

						</option>

						<option class="text-my" value="Lay Tine Sin">

							Lay Tine Sin

						</option>

						<option class="text-my" value="Letpadan">

							Letpadan

						</option>

						<option class="text-my" value="Loikaw">

							Loikaw

						</option>

						<option class="text-my" value="Madaya">

							Madaya

						</option>

						<option class="text-my" value="Maeii">

							Maeii

						</option>

						<option class="text-my" value="Magway">

							Magway

						</option>

						<option class="text-my" value="Mahlaing">

							Mahlaing

						</option>

						<option class="text-my" value="Mandalay">

							Mandalay

						</option>

						<option class="text-my" value="Maw Hun">

							Maw Hun

						</option>

						<option class="text-my" value="Maw Luu">

							Maw Luu

						</option>

						<option class="text-my" value="Mawlamyine">

							Mawlamyine

						</option>

						<option class="text-my" value="Meiktila">

							Meiktila

						</option>

						<option class="text-my" value="MinBya">

							MinBya

						</option>

						<option class="text-my" value="Minbu">

							Minbu

						</option>

						<option class="text-my" value="Moebyel">

							Moebyel

						</option>

						<option class="text-my" value="Mogaung">

							Mogaung

						</option>

						<option class="text-my" value="Mogok">

							Mogok

						</option>

						<option class="text-my" value="Mohnyin">

							Mohnyin

						</option>

						<option class="text-my" value="Monywa">

							Monywa

						</option>

						<option class="text-my" value="Mrauk-U">

							Mrauk-U

						</option>

						<option class="text-my" value="Mudon">

							Mudon

						</option>

						<option class="text-my" value="Muse">

							Muse

						</option>

						<option class="text-my" value="Myaing">

							Myaing

						</option>

						<option class="text-my" value="Myawaddy">

							Myawaddy

						</option>

						<option class="text-my" value="Myeik">

							Myeik

						</option>

						<option class="text-my" value="Myingyan">

							Myingyan

						</option>

						<option class="text-my" value="Myitchay">

							Myitchay

						</option>

						<option class="text-my" value="Myitkyina">

							Myitkyina

						</option>

						<option class="text-my" value="Myittha">

							Myittha

						</option>

						<option class="text-my" value="Nam Hpat Kar">

							Nam Hpat Kar

						</option>

						<option class="text-my" value="Nanmati">

							Nanmati

						</option>

						<option class="text-my" value="Napyitaw">

							Napyitaw

						</option>

						<option class="text-my" value="Natmauk">

							Natmauk

						</option>

						<option class="text-my" value="Natogyi">

							Natogyi

						</option>

						<option class="text-my" value="Nattalin">

							Nattalin

						</option>

						<option class="text-my" value="Nawnghkio">

							Nawnghkio

						</option>

						<option class="text-my" value="Nawnghkio">

							Nawnghkio

						</option>

						<option class="text-my" value="Naypyitaw (Bawga)">

							Naypyitaw (Bawga)

						</option>

						<option class="text-my" value="Naypyitaw (Myoma)">

							Naypyitaw (Myoma)

						</option>

						<option class="text-my" value="Naypyitaw(Tour Gate)">

							Naypyitaw(Tour Gate)

						</option>

						<option class="text-my" value="Ngapali">

							Ngapali

						</option>

						<option class="text-my" value="Ngar O">

							Ngar O

						</option>

						<option class="text-my" value="Ngathayauk">

							Ngathayauk

						</option>

						<option class="text-my" value="Nyaung Kone">

							Nyaung Kone

						</option>

						<option class="text-my" value="Nyaung Lay Pin">

							Nyaung Lay Pin

						</option>

						<option class="text-my" value="Oak Pho">

							Oak Pho

						</option>

						<option class="text-my" value="Oke Shit Pin">

							Oke Shit Pin

						</option>

						<option class="text-my" value="Padaung">

							Padaung

						</option>

						<option class="text-my" value="Padein">

							Padein

						</option>

						<option class="text-my" value="Pakokku">

							Pakokku

						</option>

						<option class="text-my" value="Pale">

							Pale

						</option>

						<option class="text-my" value="Pathein">

							Pathein

						</option>

						<option class="text-my" value="Pauk">

							Pauk

						</option>

						<option class="text-my" value="Paukkhaung">

							Paukkhaung

						</option>

						<option class="text-my" value="Pauktaw">

							Pauktaw

						</option>

						<option class="text-my" value="Paung">

							Paung

						</option>

						<option class="text-my" value="Paungdale">

							Paungdale

						</option>

						<option class="text-my" value="Paungde">

							Paungde

						</option>

						<option class="text-my" value="Pay Pin Tike">

							Pay Pin Tike

						</option>

						<option class="text-my" value="Payangazu">

							Payangazu

						</option>

						<option class="text-my" value="Pekon">

							Pekon

						</option>

						<option class="text-my" value="Penwegon">

							Penwegon

						</option>

						<option class="text-my" value="Phar Auk">

							Phar Auk

						</option>

						<option class="text-my" value="Phyu">

							Phyu

						</option>

						<option class="text-my" value="Pindaya">

							Pindaya

						</option>

						<option class="text-my" value="Pinlaung">

							Pinlaung

						</option>

						<option class="text-my" value="Ponnagyun">

							Ponnagyun

						</option>

						<option class="text-my" value="Popa">

							Popa

						</option>

						<option class="text-my" value="Pwintbyu">

							Pwintbyu

						</option>

						<option class="text-my" value="Pyawbwe">

							Pyawbwe

						</option>

						<option class="text-my" value="Pyay">

							Pyay

						</option>

						<option class="text-my" value="Pyin Oo Lwin">

							Pyin Oo Lwin

						</option>

						<option class="text-my" value="Pyinyaung">

							Pyinyaung

						</option>

						<option class="text-my" value="Pyuntaza">

							Pyuntaza

						</option>

						<option class="text-my" value="Sagaing">

							Sagaing

						</option>

						<option class="text-my" value="Saing Pyin">

							Saing Pyin

						</option>

						<option class="text-my" value="Salin">

							Salin

						</option>

						<option class="text-my" value="Sane">

							Sane

						</option>

						<option class="text-my" value="Sate Htain">

							Sate Htain

						</option>

						<option class="text-my" value="Satthwa">

							Satthwa

						</option>

						<option class="text-my" value="Shwe Ku">

							Shwe Ku

						</option>

						<option class="text-my" value="Shwe Nyaung">

							Shwe Nyaung

						</option>

						<option class="text-my" value="Shwe Nyaung(Inle)">

							Shwe Nyaung(Inle)

						</option>

						<option class="text-my" value="Shwe Set Taw">

							Shwe Set Taw

						</option>

						<option class="text-my" value="ShweNyaung(Inle)">

							ShweNyaung(Inle)

						</option>

						<option class="text-my" value="Shwebo">

							Shwebo

						</option>

						<option class="text-my" value="Shwedaung">

							Shwedaung

						</option>

						<option class="text-my" value="Shwehlae">

							Shwehlae

						</option>

						<option class="text-my" value="Si Sone Gone">

							Si Sone Gone

						</option>

						<option class="text-my" value="Sin Hpyu Kyun">

							Sin Hpyu Kyun

						</option>

						<option class="text-my" value="Sinphyushin">

							Sinphyushin

						</option>

						<option class="text-my" value="Sittwe">

							Sittwe

						</option>

						<option class="text-my" value="Tabayin">

							Tabayin

						</option>

						<option class="text-my" value="Tamu">

							Tamu

						</option>

						<option class="text-my" value="Tatkon">

							Tatkon

						</option>

						<option class="text-my" value="Taungdwingyi">

							Taungdwingyi

						</option>

						<option class="text-my" value="Taunggyi">

							Taunggyi

						</option>

						<option class="text-my" value="Taungoo">

							Taungoo

						</option>

						<option class="text-my" value="Taungtha">

							Taungtha

						</option>

						<option class="text-my" value="Taw Kyel Inn">

							Taw Kyel Inn

						</option>

						<option class="text-my" value="Taze">

							Taze

						</option>

						<option class="text-my" value="Tha Phay Wa">

							Tha Phay Wa

						</option>

						<option class="text-my" value="Thanbyuzayat">

							Thanbyuzayat

						</option>

						<option class="text-my" value="Thandwe">

							Thandwe

						</option>

						<option class="text-my" value="Thaton">

							Thaton

						</option>

						<option class="text-my" value="Thazi">

							Thazi

						</option>

						<option class="text-my" value="Tigyaing">

							Tigyaing

						</option>

						<option class="text-my" value="Tigyaing">

							Tigyaing

						</option>

						<option class="text-my" value="Tike Chaung">

							Tike Chaung

						</option>

						<option class="text-my" value="Tilin">

							Tilin

						</option>

						<option class="text-my" value="Toungup">

							Toungup

						</option>

						<option class="text-my" value="Wathtikan">

							Wathtikan

						</option>

						<option class="text-my" value="Waw">

							Waw

						</option>

						<option class="text-my" value="Wetpoat">

							Wetpoat

						</option>

						<option class="text-my" value="Wundwin">

							Wundwin

						</option>

						<option class="text-my" value="Yae Nan Ma">

							Yae Nan Ma

						</option>

						<option class="text-my" value="Yamethin">

							Yamethin

						</option>

						<option class="text-my" value="Yanbye">

							Yanbye

						</option>

						<option class="text-my" value="Yangon" selected="">

							Yangon

						</option>


					</select><span class="select2 select2-container select2-container--bootstrap" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single text-my" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-sourceId-container"><span class="select2-selection__rendered" id="select2-sourceId-container" title="

						Yangon

						">
					</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>

					<div class="text-danger"></div>


				</div>
				<div class="col-md-3 col-sm-5 col-xs-6 margin-top-sm">
					<label class="text-my hidden-lg hidden-md">Going to</label>

					<select class="form-control text-my" name="destinationId" id="destinationId" tabindex="-1">
						<option class="text-my" value="">--- Select ---</option>

						<option class="text-my" value="39 Phayagyi">

							39 Phayagyi

						</option>

						<option class="text-my" value="Ahtet Min Hla">

							Ahtet Min Hla

						</option>

						<option class="text-my" value="Ann">

							Ann

						</option>

						<option class="text-my" value="AungLan">

							AungLan

						</option>

						<option class="text-my" value="Aungpan">

							Aungpan

						</option>

						<option class="text-my" value="Ayadaw">

							Ayadaw

						</option>

						<option class="text-my" value="Bagan/Nyaung-U">

							Bagan/Nyaung-U

						</option>

						<option class="text-my" value="Bago">

							Bago

						</option>

						<option class="text-my" value="Bahin">

							Bahin

						</option>

						<option class="text-my" value="Bhamo">

							Bhamo

						</option>

						<option class="text-my" value="Bilin">

							Bilin

						</option>

						<option class="text-my" value="Bokpyin">

							Bokpyin

						</option>

						<option class="text-my" value="Budalin">

							Budalin

						</option>

						<option class="text-my" value="Chauk">

							Chauk

						</option>

						<option class="text-my" value="ChaungU">

							ChaungU

						</option>

						<option class="text-my" value="Chaungzon">

							Chaungzon

						</option>

						<option class="text-my" value="Daik-U">

							Daik-U

						</option>

						<option class="text-my" value="Dawei">

							Dawei

						</option>

						<option class="text-my" value="Demoso">

							Demoso

						</option>

						<option class="text-my" value="Gangaw">

							Gangaw

						</option>

						<option class="text-my" value="Gwa">

							Gwa

						</option>

						<option class="text-my" value="Gway Gone">

							Gway Gone

						</option>

						<option class="text-my" value="Gyobingauk">

							Gyobingauk

						</option>

						<option class="text-my" value="Hakha">

							Hakha

						</option>

						<option class="text-my" value="HeHoe">

							HeHoe

						</option>

						<option class="text-my" value="Hopin">

							Hopin

						</option>

						<option class="text-my" value="Hpa-An">

							Hpa-An

						</option>

						<option class="text-my" value="Hpayargyi">

							Hpayargyi

						</option>

						<option class="text-my" value="Hseni">

							Hseni

						</option>

						<option class="text-my" value="Hsipaw">

							Hsipaw

						</option>

						<option class="text-my" value="Htonebo">

							Htonebo

						</option>

						<option class="text-my" value="InDaw">

							InDaw

						</option>

						<option class="text-my" value="Inle">

							Inle

						</option>

						<option class="text-my" value="Inle">

							Inle

						</option>

						<option class="text-my" value="InnMa">

							InnMa

						</option>

						<option class="text-my" value="Ka Nyut Kwin">

							Ka Nyut Kwin

						</option>

						<option class="text-my" value="Kabyu">

							Kabyu

						</option>

						<option class="text-my" value="Kaing Taw Ma">

							Kaing Taw Ma

						</option>

						<option class="text-my" value="Kalar Pyin">

							Kalar Pyin

						</option>

						<option class="text-my" value="Kalaw">

							Kalaw

						</option>

						<option class="text-my" value="Kale">

							Kale

						</option>

						<option class="text-my" value="Kamma">

							Kamma

						</option>

						<option class="text-my" value="Kanbya">

							Kanbya

						</option>

						<option class="text-my" value="Kawkareik">

							Kawkareik

						</option>

						<option class="text-my" value="Kawthaung">

							Kawthaung

						</option>

						<option class="text-my" value="Khinoo">

							Khinoo

						</option>

						<option class="text-my" value="Kume">

							Kume

						</option>

						<option class="text-my" value="Kutkai">

							Kutkai

						</option>

						<option class="text-my" value="Kyaikkami">

							Kyaikkami

						</option>

						<option class="text-my" value="Kyaikkami">

							Kyaikkami

						</option>

						<option class="text-my" value="Kyaikto">

							Kyaikto

						</option>

						<option class="text-my" value="Kyauk Padaung">

							Kyauk Padaung

						</option>

						<option class="text-my" value="Kyauk Taga">

							Kyauk Taga

						</option>

						<option class="text-my" value="Kyaukme">

							Kyaukme

						</option>

						<option class="text-my" value="Kyaukphyu">

							Kyaukphyu

						</option>

						<option class="text-my" value="Kyaukse">

							Kyaukse

						</option>

						<option class="text-my" value="Kyauktaw">

							Kyauktaw

						</option>

						<option class="text-my" value="Kyaukyit">

							Kyaukyit

						</option>

						<option class="text-my" value="Kyaw">

							Kyaw

						</option>

						<option class="text-my" value="Kyeintali">

							Kyeintali

						</option>

						<option class="text-my" value="Kyunchaung">

							Kyunchaung

						</option>

						<option class="text-my" value="Lashio">

							Lashio

						</option>

						<option class="text-my" value="Lat Pan Hla">

							Lat Pan Hla

						</option>

						<option class="text-my" value="Lat YIn Ma">

							Lat YIn Ma

						</option>

						<option class="text-my" value="Lawksawk">

							Lawksawk

						</option>

						<option class="text-my" value="Lay Tine Sin">

							Lay Tine Sin

						</option>

						<option class="text-my" value="Letpadan">

							Letpadan

						</option>

						<option class="text-my" value="Loikaw">

							Loikaw

						</option>

						<option class="text-my" value="Madaya">

							Madaya

						</option>

						<option class="text-my" value="Maeii">

							Maeii

						</option>

						<option class="text-my" value="Magway">

							Magway

						</option>

						<option class="text-my" value="Mahlaing">

							Mahlaing

						</option>

						<option class="text-my" value="Mandalay">

							Mandalay

						</option>

						<option class="text-my" value="Maw Hun">

							Maw Hun

						</option>

						<option class="text-my" value="Maw Luu">

							Maw Luu

						</option>

						<option class="text-my" value="Mawlamyine">

							Mawlamyine

						</option>

						<option class="text-my" value="Meiktila">

							Meiktila

						</option>

						<option class="text-my" value="MinBya">

							MinBya

						</option>

						<option class="text-my" value="Minbu">

							Minbu

						</option>

						<option class="text-my" value="Moebyel">

							Moebyel

						</option>

						<option class="text-my" value="Mogaung">

							Mogaung

						</option>

						<option class="text-my" value="Mogok">

							Mogok

						</option>

						<option class="text-my" value="Mohnyin">

							Mohnyin

						</option>

						<option class="text-my" value="Monywa" selected="">

							Monywa

						</option>

						<option class="text-my" value="Mrauk-U">

							Mrauk-U

						</option>

						<option class="text-my" value="Mudon">

							Mudon

						</option>

						<option class="text-my" value="Muse">

							Muse

						</option>

						<option class="text-my" value="Myaing">

							Myaing

						</option>

						<option class="text-my" value="Myawaddy">

							Myawaddy

						</option>

						<option class="text-my" value="Myeik">

							Myeik

						</option>

						<option class="text-my" value="Myingyan">

							Myingyan

						</option>

						<option class="text-my" value="Myitchay">

							Myitchay

						</option>

						<option class="text-my" value="Myitkyina">

							Myitkyina

						</option>

						<option class="text-my" value="Myittha">

							Myittha

						</option>

						<option class="text-my" value="Nam Hpat Kar">

							Nam Hpat Kar

						</option>

						<option class="text-my" value="Nanmati">

							Nanmati

						</option>

						<option class="text-my" value="Napyitaw">

							Napyitaw

						</option>

						<option class="text-my" value="Natmauk">

							Natmauk

						</option>

						<option class="text-my" value="Natogyi">

							Natogyi

						</option>

						<option class="text-my" value="Nattalin">

							Nattalin

						</option>

						<option class="text-my" value="Nawnghkio">

							Nawnghkio

						</option>

						<option class="text-my" value="Nawnghkio">

							Nawnghkio

						</option>

						<option class="text-my" value="Naypyitaw (Bawga)">

							Naypyitaw (Bawga)

						</option>

						<option class="text-my" value="Naypyitaw (Myoma)">

							Naypyitaw (Myoma)

						</option>

						<option class="text-my" value="Naypyitaw(Tour Gate)">

							Naypyitaw(Tour Gate)

						</option>

						<option class="text-my" value="Ngapali">

							Ngapali

						</option>

						<option class="text-my" value="Ngar O">

							Ngar O

						</option>

						<option class="text-my" value="Ngathayauk">

							Ngathayauk

						</option>

						<option class="text-my" value="Nyaung Kone">

							Nyaung Kone

						</option>

						<option class="text-my" value="Nyaung Lay Pin">

							Nyaung Lay Pin

						</option>

						<option class="text-my" value="Oak Pho">

							Oak Pho

						</option>

						<option class="text-my" value="Oke Shit Pin">

							Oke Shit Pin

						</option>

						<option class="text-my" value="Padaung">

							Padaung

						</option>

						<option class="text-my" value="Padein">

							Padein

						</option>

						<option class="text-my" value="Pakokku">

							Pakokku

						</option>

					
						<option class="text-my" value="Taungdwingyi">

							Taungdwingyi

						</option>

						<option class="text-my" value="Taunggyi">

							Taunggyi

						</option>

						<option class="text-my" value="Taungoo">

							Taungoo

						</option>

						<option class="text-my" value="Taungtha">

							Taungtha

						</option>

						<option class="text-my" value="Taw Kyel Inn">

							Taw Kyel Inn

						</option>

						<option class="text-my" value="Taze">

							Taze

						</option>

						<option class="text-my" value="Tha Phay Wa">

							Tha Phay Wa

						</option>

						<option class="text-my" value="Thanbyuzayat">

							Thanbyuzayat

						</option>

						<option class="text-my" value="Thandwe">

							Thandwe

						</option>

						<option class="text-my" value="Thaton">

							Thaton

						</option>

						<option class="text-my" value="Thazi">

							Thazi

						</option>

						<option class="text-my" value="Tigyaing">

							Tigyaing

						</option>

						<option class="text-my" value="Tigyaing">

							Tigyaing

						</option>

						<option class="text-my" value="Tike Chaung">

							Tike Chaung

						</option>

						<option class="text-my" value="Tilin">

							Tilin

						</option>

						<option class="text-my" value="Toungup">

							Toungup

						</option>

						<option class="text-my" value="Wathtikan">

							Wathtikan

						</option>

						<option class="text-my" value="Waw">

							Waw

						</option>

						<option class="text-my" value="Wetpoat">

							Wetpoat

						</option>



					</select>
					<span class="select2 select2-container select2-container--bootstrap" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single text-my" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-destinationId-container"><span class="select2-selection__rendered" id="select2-destinationId-container" title="

						Monywa

						">


					</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>

					<div class="text-danger"></div>


				</div>
				<!-- <div class="col-md-2 col-sm-5 col-xs-6 margin-top-sm">
					<div class="input-group text-my">
						<input type="text" class="form-control datepicker picker__input" name="departureDate" id="departureDate" placeholder="Pick date">				
					</div>
				</div>
				<div class="col-md-2 col-sm-5 col-xs-6 margin-top-sm">
					<label class="text-my hidden-lg hidden-md">Number of Seats</label>

					<select class="form-control" name="numberOfTravellers" id="numberOfTravellers">

						<option value="1">
							1
						</option>

						<option value="2">
							2
						</option>

						<option value="3" selected="">
							3
						</option>

						<option value="4">
							4
						</option>

						<option value="5">
							5
						</option>

						<option value="6">
							6
						</option>

					</select>

					<div class="text-danger"></div>


				</div> -->
				<!-- <div class="col-md-2 col-xs-6 text-right">
					<div class="hidden-md hidden-lg"><label class="text-my"></label></div>
					<button class="tripSearchButton btn btn-custom btn-block" type="submit" data-message="Please select arrival place and departure place.">
						<i class="fa fa-search" aria-hidden="true"></i> <span class="text-my">Search Now</span>
					</button> -->
				</div>
			</div>
		</div>
	</div>
	<!-- end of search box -->

	<div class="time-box">
		<div class="container">
			<div class="row" id="schdule">
				<div class="col-lg-3 col-md-3 col-sm-3" id="box1">
					<div class="side-box">
						<div class="Time">
							<h3>Time</h3>
							<input type="radio" name="time_option" class="time_option" id="time_option_any" value="" checked="">
							<label for="time_option_am">4 Am</label>
							<br>
							<input type="radio" name="time_option" class="time_option" id="time_option_am" value="AM">
							<label for="time_option_am">10 AM</label>
							<br>
							<input type="radio" name="time_option" class="time_option" id="time_option_pm" value="PM">
							<label for="time_option_pm">4 PM</label>
							<br>
							<input type="radio" name="time_option" class="time_option" id="time_option_pm" value="PM">
							<label for="time_option_pm">8 PM PM</label>
							<br>
							<input type="radio" name="time_option" class="time_option" id="time_option_pm" value="PM">
							<label for="time_option_pm">10 PM</label>
							<br>
						</div>
					</div>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-9" id="box2">
					<div class="trip-result">
						<div class="card">
							<div class="msg">Morning Bus</div>
							<div class="row">
								<div class="col-md-6 col-xs-12">
									<div class="box">
										<h2>
											08:00 AM

											Standard

										</h2>
										<p>

											Yangon-Monywa

										</p>
										<p>
											<span>Departs:</span> Mar 11, 08:00 AM
											<br>
											<span>Arrives:</span> Mar 11, 08:00 PM
											&nbsp;
											<span class="text-my">Duration:</span> 12 Hours
										</p>
									</div>
								</div>
								<div class="col-md-3 col-xs-5">
									<div class="box margin-top-sm">
										<img id="bus-logo" src="img/shwe-sin-satkyar.png" class="img-fluid">
									</div>

								</div>
								<div class="col-md-3 col-xs-7 text-right">
									<div class="box box-border">
										<p class="rate">13,500 <span>MMK/Seat</span></p>
										<p>Total: 40,500 MMK</p>
										<a href="{{ route('bus.seats')}}" class="btn btn-danger" id="seat"> select seat</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- first -->

					<div class="trip-result">
						<div class="card">
							<div class="msg">Morning Bus</div>
							<div class="row">
								<div class="col-md-6 col-xs-12">
									<div class="box">
										<h2>
											08:00 PM 
											<span> - </span>

											Standard

										</h2>
										<p>

											Yangon-Monywa

										</p>
										<p>
											<span>Departs:</span> Mar 11, 08:00 AM
											<br>
											<span>ArrivMar 12, 07:00 AMMar 11, 08:00 PM
												&nbsp;
												<span class="text-my">Duration:</span> 12 Hours
											</p>
										</div>
									</div>
									<div class="col-md-3 col-xs-5">
										<div class="box margin-top-sm">
											<img id="bus-logo" src="img/shwe-sin-satkyar.png" class="img-fluid">
										</div>

									</div>
									<div class="col-md-3 col-xs-7 text-right">
										<div class="box box-border">
											<p class="rate">13,500 <span>MMK/Seat</span></p>
											<p>Total: 40,500 MMK</p>
											<a href="{{ route('bus.seats')}}" class="btn btn-danger" id="seat"> select seat</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- second -->
						<div class="trip-result">
							<div class="card">
								<div class="msg">Evening Bus</div>
								<div class="row">
									<div class="col-md-6 col-xs-12">
										<div class="box">
											<h2>
												06:00 PM
												<span> - </span>

												Standard

											</h2>
											<p>

												Yangon-Monywa

											</p>
											<p>
												<span>Departs:</span> Mar 11, 06:00 PM
												<br>
												<span>Arrives:</span>Mar 12, 05:00 AM
												&nbsp;
												<span class="text-my">Duration:</span>11 Hours
											</div>
										</div>
										<div class="col-md-3 col-xs-5">
											<div class="box margin-top-sm">
												<img id="bus-logo" src="img/shwe-sin-satkyar.png" class="img-fluid">
											</div>

										</div>
										<div class="col-md-3 col-xs-7 text-right">
											<div class="box box-border">
												<p class="rate">13,500 <span>MMK/Seat</span></p>
												<p>Total: 40,500 MMK</p>
												<a href="{{route('bus.seats')}}" class="btn btn-danger" id="seat"> select seat</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- third -->
							<div class="trip-result">
								<div class="card">
									<div class="msg">Evening Bus</div>
									<div class="row">
										<div class="col-md-6 col-xs-12">
											<div class="box">
												<h2>
													06:00 PM
													<span> - </span>

													Standard

												</h2>
												<p>

													Yangon-Monywa

												</p>
												<p>
													<span>Departs:</span> Mar 11, 06:00 PM
													<br>
													<span>Arrives:</span>Mar 12, 05:00 AM
													&nbsp;
													<span class="text-my">Duration:</span>11 Hours
												</div>
											</div>
											<div class="col-md-3 col-xs-5">
												<div class="box margin-top-sm">
													<img id="bus-logo" src="img/shwe-sin-satkyar.png" class="img-fluid">
												</div>

											</div>
											<div class="col-md-3 col-xs-7 text-right">
												<div class="box box-border">
													<p class="rate">13,500 <span>MMK/Seat</span></p>
													<p>Total: 40,500 MMK</p>
													<a href="select.html" class="btn btn-danger" id="seat"> select seat</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- fourth -->
							</div>

						</div>

						
					</div>
				</div>
		@endsection