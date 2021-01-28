const assert = require('assert');
const tasks = require('../tasks/04-poker-hand-tasks');
it.optional = require('../extensions/it-optional');

describe('04-poker-hand-tasks', function() {
    it.optional('getPokerHandRank should return the rank of the specified poker hand', () => {
        var rankNames = [];
        var PokerRank = tasks.PokerRank;
        rankNames[PokerRank.StraightFlush] = 'StraightFlush';
        rankNames[PokerRank.FourOfKind] = 'FourOfKind';
        rankNames[PokerRank.FullHouse] = 'FullHouse';
        rankNames[PokerRank.Flush] = 'Flush';
        rankNames[PokerRank.Straight] = 'Straight';
        rankNames[PokerRank.ThreeOfKind] = 'ThreeOfKind';
        rankNames[PokerRank.TwoPairs] = 'TwoPairs';
        rankNames[PokerRank.OnePair] = 'OnePair';
        rankNames[PokerRank.HighCard] = 'HighCard';

        [
            {
                hand: [ '4♥','5♥','6♥','7♥','8♥' ],
                expected: PokerRank.StraightFlush
            },{
                hand: [ 'A♣','K♣','Q♣','J♣','10♣' ],
                expected: PokerRank.StraightFlush
            },{
                hand: [ '10♦','9♦','6♦','7♦','8♦' ],
                expected: PokerRank.StraightFlush
            },{
                hand: [ 'A♠','4♠','3♠','5♠','2♠' ],
                expected: PokerRank.StraightFlush
            },{
                hand: [ '4♣','4♦','4♥','4♠','10♥' ],
                expected: PokerRank.FourOfKind
            },{
                hand: [ '2♣','A♦','A♣','A♠','A♥' ],
                expected: PokerRank.FourOfKind
            },{
                hand: [ '10♣','10♦','6♦','10♠','10♥' ],
                expected: PokerRank.FourOfKind
            },{
                hand: [ '4♣','4♦','5♦','5♠','5♥' ],
                expected: PokerRank.FullHouse
            },{
                hand: [ 'A♣','2♦','A♦','2♠','2♥' ],
                expected: PokerRank.FullHouse
            },{
                hand: [ '4♣','4♦','5♦','5♠','5♥' ],
                expected: PokerRank.FullHouse
            },{
                hand: [ '4♣','5♣','6♣','7♣','Q♣' ],
                expected: PokerRank.Flush
            },{
                hand: [ 'A♦','2♦','3♦','4♦','K♦' ],
                expected: PokerRank.Flush
            },{
                hand: [ 'A♠','Q♠','J♠','10♠','9♠' ],
                expected: PokerRank.Flush
            },{
                hand: [ '2♥','4♥','5♥','7♥','A♥' ],
                expected: PokerRank.Flush
            },{
                hand: [ '2♠','3♥','4♥','5♥','6♥' ],
                expected: PokerRank.Straight
            },{
                hand: [ 'A♠','K♦','Q♦','J♦','10♦' ],
                expected: PokerRank.Straight
            },{
                hand: [ '10♥','8♥','9♠','7♥','6♦' ],
                expected: PokerRank.Straight
            },{
                hand: [ '2♥','4♦','5♥','A♦','3♠' ],
                expected: PokerRank.Straight
            },{
                hand: [ '2♥','2♠','2♦','7♥','A♥' ],
                expected: PokerRank.ThreeOfKind
            },{
                hand: [ '2♥','4♥','A♥','A♦','A♠' ],
                expected: PokerRank.ThreeOfKind
            },{
                hand: [ '10♥','9♥','10♦','J♥','10♠' ],
                expected: PokerRank.ThreeOfKind
            },{
                hand: [ '2♥','4♦','4♥','A♦','A♠' ],
                expected: PokerRank.TwoPairs
            },{
                hand: [ '3♥','4♥','A♥','3♦','A♠' ],
                expected: PokerRank.TwoPairs
            },{
                hand: [ '5♥','6♥','A♥','6♦','5♠' ],
                expected: PokerRank.TwoPairs
            },{
                hand: [ '2♥','4♦','5♥','A♦','A♠' ],
                expected: PokerRank.OnePair
            },{
                hand: [ '3♥','4♥','10♥','3♦','A♠' ],
                expected: PokerRank.OnePair
            },{
                hand: [ '5♥','6♥','7♥','8♦','5♠' ],
                expected: PokerRank.OnePair
            },{
                hand: [ '3♥','4♥','5♥','7♦','8♥' ],
                expected: PokerRank.HighCard
            },{
                hand: [ 'A♥','K♥','Q♥','J♦','5♠' ],
                expected: PokerRank.HighCard
            },{
                hand: [ 'A♥','K♥','Q♥','2♦','3♠' ],
                expected: PokerRank.HighCard
            }
        ].forEach(data => {
            var actual = tasks.getPokerHandRank(data.hand);
            assert(
                actual >= PokerRank.HighCard,
                'Invalid return value. The return value should be >= PokerRank.HighCard'
            );
            assert(
                actual <= PokerRank.StraightFlush,
                'Invalid return value. The return value should be <= PokerRank.StraightFlush'
            );
            assert(
                actual == data.expected,
                `'${data.hand}' is ranked as ${rankNames[data.expected]}, but actually ${rankNames[actual]} `
            );
        });
    });
});
