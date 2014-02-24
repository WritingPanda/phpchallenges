<?php

// complete all "todo"s to build a blackjack game

// create an array for suits
$suits = ['C', 'H', 'S', 'D'];

// create an array for cards
$cards = ['A', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K'];

// build a deck (array) of cards
// card values should be "VALUE SUIT". ex: "7 H"
// make sure to shuffle the deck before returning it
function buildDeck($suits, $cards) {
	$deck = [];
	foreach ($suits as $suit) {
		foreach ($cards as $card) {
			$deck[] = $card . ' ' . $suit;
		}
	}
	shuffle($deck);
	return $deck;
}

// determine if a card is an ace
// return true for ace, false for anything else
function cardIsAce($card) {
	$face = substr($card, 0, 1);
	if ($face == 'A') {
		return true;
	} else {
		return false;
	}
}

// determine the value of an individual card (string)
// aces are worth 11
// face cards are worth 10
// numeric cards are worth their value
function getCardValue($card) {
	$amount = substr($card, 0, 1);
	switch ($amount) {
		case '2':
			$value = 2;
			return $value;
		case '3':
			$value = 3;
			return $value;
		case '4':
			$value = 4;
			return $value;
			break;
		case '5':
			$value = 5;
			return $value;
			break;
		case '6':
			$value = 6;
			return $value;
			break;
		case '7':
			$value = 7;
			return $value;
			break;
		case '8':
			$value = 8;
			return $value;
			break;
		case '9':
			$value = 9;
			return $value;
			break;
		case '1':
			$value = 10;
			return $value;
			break;
		case 'J':
			$value = 10;
			return $value;
			break;
		case 'Q':
			$value = 10;
			return $value;
			break;
		case 'K':
			$value = 10;
			return $value;
			break;
		case 'A':
			$value = 11;
			return $value;
			break;
	}
}

// get total value for a hand of cards
// don't forget to factor in aces
// aces can be 1 or 11 (make them 1 if total value is over 21)
function getHandTotal($hand) {
	$sum = 0;
	foreach ($hand as $card) {
		if (cardIsAce($card)) {
			$ace = true;
		}
		$sum += getCardValue($card);
	}
	if ($ace == true && $sum > 21) {
		$newSum = $sum - 10;
		return $newSum;
	} else {
		return $sum;
	}

} print_r(getHandTotal(['A C', '5 D', 'A H']));

// draw a card from the deck into a hand
// pass by reference (both hand and deck passed in are modified)
function drawCard(&$hand, &$deck) {
	
}

// // print out a hand of cards
// // name is the name of the player
// // hidden is to initially show only first card of hand (for dealer)
// // output should look like this:
// // Dealer: [4 C] [???] Total: ???
// // or:
// // Player: [J D] [2 D] Total: 12
// function echoHand($hand, $name, $hidden = false) {
//   // todo
// }

// // build the deck of cards
// $deck = buildDeck($suits, $cards);

// // initialize a dealer and player hand
// $dealer = [];
// $player = [];

// // dealer and player each draw two cards
// // todo

// // echo the dealer hand, only showing the first card
// // todo

// // echo the player hand
// // todo

// // allow player to "(H)it or (S)tay?" till they bust (exceed 21) or stay
// while (todo) {
//   // todo
// }

// // show the dealer's hand (all cards)
// // todo

// // todo (all comments below)

// // at this point, if the player has more than 21, tell them they busted
// // otherwise, if they have 21, tell them they won (regardless of dealer hand)

// // if neither of the above are true, then the dealer needs to draw more cards
// // dealer draws until their hand has a value of at least 17
// // show the dealer hand each time they draw a card

// // finally, we can check and see who won
// // by this point, if dealer has busted, then player automatically wins
// // if player and dealer tie, it is a "push"
// // if dealer has more than player, dealer wins, otherwise, player wins

?>