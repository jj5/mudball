<?php

interface IMudNullValue extends
  IMudObject,
  IMudFalse,
  IMudInteger,
  IMudFloat,
  IMudPositive,
  IMudText,
  IMudBinary,
  IMudDate,
  IMudTime,
  IMudDateTimeUniversal,
  IMudDateTimeLocal,
  IMudDateTimeZoned,
  IMudDateTimeZone,
  IMudDateInterval,
  IMudMoney,
  IMudCurrency,
  IMudDollars,
  IMudCents,
  IMudUrl,
  IMudUrlScheme,
  IMudUrlUser,
  IMudUrlPass,
  IMudUrlHost,
  IMudUrlPort,
  IMudUrlEncoded,
  IMudUrlPath,
  IMudUrlQuery,
  IMudUrlFragment {

}
