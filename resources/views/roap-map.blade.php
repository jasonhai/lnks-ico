@extends('layouts.frontend')

@section('title', 'Home page')

@section('sidebar')
    @parent
@stop

@section('content')
    <section id="banner">
        <div class="content">
            <header>
                <h2>Welcome to Roap Map</h2>
            </header>
        </div>
        <a class="goto-next scrolly">Next</a>
    </section>

    <section class="smart-contract">
        <div class="content">
            <div class="container">
                <h1>SLVone ecosystem</h1>
                <p>SLVone is the first decentralized silver market in the world, <br>
                where the users from everywhere on the globe can mint, trade and redeem their silver bullion.</p>

                <h1>The SLV</h1>
                <p>Do you have SLV tokens? With SLV, you have the superpower to mint the silver token via <br>
                Minter Smart Contract on SLVone ecosystem. You can also trade and redeem real Silver Bullion in the matter of seconds.<br>
                Learn more a bout the smart contract and start participating with one of the following exchanges.
                </p>

                <h1>Token Information</h1>
                <table class="home-table">
                    <tbody><tr>
                            <th>Token name</th>
                            <td>The Silverlink Network Token</td>
                        </tr>
                        <tr>
                            <th>Token type</th>
                            <td>ERC20</td>
                        </tr>
                        <tr>
                            <th colspan="2" style="font-weight: bold;">Add The Silverlink Network Token (SLV) to your Wallet (MyEtherWallet, Metamask…)</th>
                        </tr>
                        <tr>
                            <th>Token Contract Address</th>
                            <td>0xdD2634908c54139964e316B6953818b043120b63</td>
                        </tr>
                        <tr>
                            <th>Token symbol</th>
                            <td>SLV</td>
                        </tr> 
                        <tr>
                            <th>Decimals of Precision</th>
                            <td>18</td>
                        </tr>
                    </tbody>
                </table>

                <h1>Exchange</h1>
                <p>Now, you can trade SLV on DEXs</p>
                <table class="home-table">
                    <tbody><tr>
                            <th>Etherdelta</th>
                            <td><a href="https://etherdelta.com/#0xdD2634908c54139964e316B6953818b043120b63-ETH" target="_blank">https://etherdelta.com/#0xdD2634908c54139964e316B6953818b043120b63-ETH</a></td>
                        </tr>
                        <tr>
                            <th>Forkdelta</th>
                            <td><a href="https://forkdelta.app/#!/trade/0xdD2634908c54139964e316B6953818b043120b63-ETH" target="_blank">https://forkdelta.app/#!/trade/0xdD2634908c54139964e316B6953818b043120b63-ETH</a></td>
                        </tr>
                        <tr>
                            <th colspan="2" style="font-weight: bold;">SLV will be listed on big exchanges soon</th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('partials.footer')   

@stop