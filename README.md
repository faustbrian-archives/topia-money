# Topia Money

This repository contains the source code of [Topia Money](https://topia.money/). It is a small [Laravel](https://laravel.com/) application that indexes historical pricing information for crypto currencies through [Topia Money Core](https://github.com/faustbrian/topia-money-core). It exposes all data in a normalised format through a REST API, ready for consumption in third-party applications.

## Adding a new Crawler or Service

If you want to add a new Crawler or Service to gather data you can submit a pull request with tests to [Topia Money Core](https://github.com/faustbrian/topia-money-core). This package is responsible for all of the data gathering and normalising.
